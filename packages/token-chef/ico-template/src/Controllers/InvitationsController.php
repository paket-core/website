<?php

namespace TokenChef\IcoTemplate\Controllers;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Models\EmailInvitation;
use TokenChef\IcoTemplate\Services\EmailInvitationService;
use TokenChef\IcoTemplate\Services\StaticArray;

/**
 * Class TransactionsController
 * @package App\Http\Controllers\Api
 */
class InvitationsController extends RestController
{

    /**
     * @return mixed
     * @throws \Exception
     */
    public function table()
    {
        return datatables()->of(EmailInvitation::whereUserId(\Auth::id())->get())
            ->make(true);
    }

    public function send()
    {
        $invitations = \Request::get('invitations', []);
        try {
            foreach ($invitations as $invitation) {
                EmailInvitationService::store_invitation(\Auth::user(), $invitation);
            }
            return $this->json_success('Invitations sent');
        } catch (\ErrorException $e) {
            return $this->json_error($e->getMessage());
        }
    }

    public function delete($id)
    {
        try {

            $invitation = EmailInvitation::find($id);
            if (!$invitation) {
                throw  new WebException(trans('ico-template::home.invitation_not_found'));
            }
            $access = \Auth::user()->role === StaticArray::ROLE_ADMIN || $invitation->user_id === \Auth::id();
            if (!$access) {
                throw  new WebException(trans('ico-template::home.invitation_not_found'));
            }
            EmailInvitationService::delete_invitation($invitation);
            return $this->json_success(trans('ico-template::home.invitation_deleted'));

        } catch (WebException $err) {
            return $this->json_error($err->getMessage());
        }
    }
}