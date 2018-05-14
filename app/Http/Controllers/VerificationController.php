<?php

namespace App\Http\Controllers;

/**
 * Verify users email address
 *
 * Class VerificationController
 * @package App\Http\Controllers
 */
class VerificationController extends RestController
{

    /**
     * Store new public user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($code)
    {
        return view('auth.verification.verification_form', [
            'code' => $this->secure_data($code)
        ]);
    }

    /**
     * Store new public user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show_for_referrals($code)
    {
        return view('auth.verification.referrals_verification_form', [
            'code' => $this->secure_data($code)
        ]);
    }
}