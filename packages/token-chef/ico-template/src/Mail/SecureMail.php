<?php

namespace TokenChef\IcoTemplate\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SecureMail extends Mailable
{
    use Queueable, SerializesModels;

    protected function secure($name)
    {
        return trim(preg_replace('/ +/', ' ', urldecode(html_entity_decode(strip_tags($name)))));
    }

    protected function secure_array($data = [], $fields)
    {
        foreach ($fields as $field) {
            $data[$field] = isset($data[$field]) ? $this->secure($data[$field]) : null;
        }
        return $data;
    }
}
