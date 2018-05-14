<?php

namespace TokenChef\IcoTemplate\Services;

use Carbon\Carbon;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Jobs\SendInvitationEmail;
use TokenChef\IcoTemplate\Models\EmailInvitation;
use TokenChef\IcoTemplate\Models\User;

class EmailInvitationService
{

    public static function get_invitations(User $user)
    {
        return $user->email_invitations;
    }

    /**
     * @param EmailInvitation $invitation
     * @return bool
     */
    public static function delete_invitation($invitation)
    {
        try {
            return $invitation && $invitation->delete();
        } catch (\Exception $e) {
            return false;
        }
    }


    /**
     * @param User $user
     * @param array $data
     * @return EmailInvitation
     * @throws WebException
     */
    public static function store_invitation(User $user, $data = [])
    {
        $count = EmailInvitation::whereUserId($user->id)->where('created_at', '>=', Carbon::now()->subHour(1))->count();
        if ($count >= StaticArray::INVITATION_PER_HOUR) {
            throw  new WebException(trans('ico-template::home.invitation_per_hour_limit', [
                'LIMIT' => StaticArray::INVITATION_PER_HOUR
            ]));
        }

        $invitation = new EmailInvitation();
        $invitation->fill($data);
        $invitation->email = UserService::fix_email($invitation->email);
        $invitation->user_id = $user->id;
        $invitation->referral_id = ReferralService::get_active_referral($user)->id;

        if (EmailInvitation::whereEmail($invitation->email)->whereUserId($invitation->user_id)->first()) {
            throw  new WebException(trans('ico-template::home.user_already_invited'));
        }

        if (!$invitation->validate()) {
            throw  new WebException($invitation->errors()->first());
        }

        if (!$invitation->save()) {
            throw  new WebException(trans('ico-template::home.save_error'));
        }

        $exists = User::whereEmail($invitation->email)->exists();
        if (!$exists) {
            dispatch(new SendInvitationEmail($invitation->id))->delay(StaticArray::EMAIL_DELAY);
        }

        return $invitation;
    }


}