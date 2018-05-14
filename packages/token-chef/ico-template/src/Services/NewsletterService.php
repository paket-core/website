<?php

namespace TokenChef\IcoTemplate\Services;

use Newsletter;
use TokenChef\IcoTemplate\Exceptions\WebException;

class NewsletterService
{
    /**
     * @param $email
     * @throws WebException
     */
    public static function subscribe($email)
    {
        if (!$email) {
            throw new WebException(trans('ico-template::home.newsletter_wrong_email_address'));
        }
        if (Newsletter::hasMember($email)) {
            throw new WebException(trans('ico-template::home.newsletter_already_member'));
        }
        if (env('MAILCHIMP_DOUBLE_OPT_IN')){
            Newsletter::subscribe($email, [], '', ['status' => 'pending']);
        }else{
            Newsletter::subscribe($email);
        }
    }


}