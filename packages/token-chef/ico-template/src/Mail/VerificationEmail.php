<?php

namespace TokenChef\IcoTemplate\Mail;

use TokenChef\IcoTemplate\Models\User;

class VerificationEmail extends SecureMail
{
    /**
     * @var User
     */
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address = env('MAIL_USERNAME');
        $name = env('MAIL_NAME');
        $subject = trans('ico-template::emails.verification_title');

        $data = [
            'name' => $this->user->name,
            'link' => route('ico-template::verification', [
                'code' => $this->user->verification_code
            ]),
            'subject' => $subject,
        ];

        $data = $this->secure_array($data, ['name']);

        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        return $this->view('ico-template::' . $template . '.verification', $data)
            ->text('ico-template::' . $template . '.verification_text', $data)
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
