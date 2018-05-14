<?php

namespace TokenChef\IcoTemplate\Mail;

use TokenChef\IcoTemplate\Models\EmailInvitation;

class InvitationEmail extends SecureMail
{
    /**
     * @var EmailInvitation
     */
    protected $invitation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invitation)
    {
        $this->invitation = $invitation;
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
        $sender = $this->invitation->user->name;
        $subject = trans('ico-template::emails.invitation_email_title', ['NAME' => $sender]);

        $data = [
            'name' => $sender,
            'receiver_name' => $this->invitation->name,
            'link' => env('REFERRAL_LINK') . $this->invitation->referral->code,
            'subject' => $subject,
        ];

        $data = $this->secure_array($data, ['name']);
        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        return $this->view('ico-template::' . $template . '.invitation', $data)
            ->text('ico-template::' . $template . '.invitation_text', $data)
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
