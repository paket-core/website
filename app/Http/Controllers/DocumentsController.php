<?php

namespace App\Http\Controllers;


class DocumentsController extends RestController
{

    public function terms_and_conditions()
    {
        return view('documents.terms_and_conditions');
    }

    public function privacy_policy()
    {
        return view('documents.privacy_policy');
    }


}
