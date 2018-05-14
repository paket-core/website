<?php

namespace TokenChef\IcoTemplate\Jobs;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Mail\InvitationEmail;
use TokenChef\IcoTemplate\Models\EmailInvitation;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\UserEventService;

class SendInvitationEmail extends SimpleJob
{

    protected $invitation_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($invitation_id)
    {
        $this->invitation_id = $invitation_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $invitation = EmailInvitation::find($this->invitation_id);
        if ($invitation) {
            \Mail::to($invitation->email)->send(new InvitationEmail($invitation));
            try {
                if (count(\Mail::failures()) > 0) {
                    UserEventService::add_event($invitation->user, StaticArray::USER_EVENT_INVITATION_EMAIL_FAIL, [
                        'name' => $invitation->name,
                        'email' => $invitation->email,
                    ]);
                } else {
                    UserEventService::add_event($invitation->user, StaticArray::USER_EVENT_INVITATION_EMAIL, [
                        'name' => $invitation->name,
                        'email' => $invitation->email,
                    ]);
                }
            } catch (WebException $err) {
                \Log::info($err->getMessage());
            }
        }
    }
}
