<?php

namespace TokenChef\IcoTemplate\Jobs;

use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Mail\ResetPasswordEmail;
use TokenChef\IcoTemplate\Models\User;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\UserEventService;

class SendResetPasswordEmail extends SimpleJob
{

    protected $user_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::find($this->user_id);
        if ($user) {
            \App::setLocale($user->lang);
            \Mail::to($user->email)->send(new ResetPasswordEmail($user));
            try {
                if (count(\Mail::failures()) > 0) {
                    UserEventService::add_event($user, StaticArray::USER_EVENT_PASSWORD_RESET_EMAIL_FAIL);
                } else {
                    UserEventService::add_event($user, StaticArray::USER_EVENT_PASSWORD_RESET_EMAIL_SUCCESS);
                }
            } catch (WebException $err) {
                \Log::info($err->getMessage());
            }
        }
    }
}
