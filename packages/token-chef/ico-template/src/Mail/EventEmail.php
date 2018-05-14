<?php

namespace TokenChef\IcoTemplate\Mail;

use TokenChef\IcoTemplate\Models\EmailInvitation;

class EventEmail extends SecureMail
{
    /**
     * @var EmailInvitation
     */
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $data = $this->data;
        $address = env('MAIL_USERNAME');
        $name = env('MAIL_NAME');
        $subject = $data['title'];

        $data = [
            'title' => $data['title'],
            'link' => $data['link'],
            'desc' => $data['desc'],
        ];

        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        return $this->view('ico-template::' . $template . '.event_email', $data)
            ->text('ico-template::' . $template . '.event_email_text', $data)
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
