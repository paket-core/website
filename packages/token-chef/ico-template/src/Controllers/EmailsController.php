<?php

namespace TokenChef\IcoTemplate\Controllers;

use App\Http\Controllers\RestController;

class EmailsController extends RestController
{

    public function verification()
    {

        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        return view('ico-template::' . $template . '.verification', [
            'name' => 'Thomas',
            'link' => route('ico-template::verification', [
                'code' => 'test'
            ]),
        ]);
    }

    public function reset_password()
    {

        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        return view('ico-template::' . $template . '.reset_password', [
            'name' => 'Thomas',
            'link' => route('ico-template::verification', [
                'code' => 'test'
            ]),
        ]);
    }

    public function event()
    {

        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        $data = [
            'title' => 'TITLE',
            'link' => 'LINK',
            'desc' => 'desc',
        ];

        return view('ico-template::' . $template . '.event_email', $data);
    }

    public function invitation()
    {

        $template = env('EMAIL_CUSTOM_TEMPLATE', 'emails');

        return view('ico-template::' . $template . '.invitation', [
            'receiver_name' => 'Kate',
            'name' => 'Thomas',
            'link' => route('ico-template::verification', [
                'code' => 'test'
            ]),
        ]);
    }
}
