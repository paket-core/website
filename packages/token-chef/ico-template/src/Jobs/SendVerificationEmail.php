<?php

namespace TokenChef\IcoTemplate\Jobs;

use GuzzleHttp\Exception\ClientException;
use TokenChef\IcoTemplate\Exceptions\WebException;
use TokenChef\IcoTemplate\Mail\VerificationEmail;
use TokenChef\IcoTemplate\Models\User;
use TokenChef\IcoTemplate\Services\StaticArray;
use TokenChef\IcoTemplate\Services\UserEventService;

class SendVerificationEmail extends SimpleJob
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
        try {
            $user = User::find($this->user_id);
            if ($user) {
                \App::setLocale($user->lang);
                \Mail::to($user->email)->send(new VerificationEmail($user));
                if (count(\Mail::failures()) > 0) {
                    UserEventService::add_event($user, StaticArray::USER_EVENT_VERIFICATION_EMAIL_FAIL);
                } else {
                    UserEventService::add_event($user, StaticArray::USER_EVENT_VERIFICATION_EMAIL_SUCCESS);
                }
            }
        } catch (WebException $err) {
            \Log::info($err->getMessage());
        } catch (ClientException $err) {
            if ($user) {
                \Log::info('Wrong sending verification email for user ' . $user->email . ' => ' . $err->getMessage());
            } else {
                \Log::info('Wrong sending verification email for user_id ' . $this->user_id . $err->getMessage());
            }
        }
    }
}
