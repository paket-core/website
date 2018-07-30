<?php

Route::middleware(['web'])->group(function () {

    Route::prefix('token-chef')->group(function () {

        Route::prefix('api')->group(function () {
            Route::post('login', 'TokenChef\IcoTemplate\Controllers\LoginController@login');
            Route::post('logout', 'TokenChef\IcoTemplate\Controllers\LoginController@logout')->name('logout');
            Route::post('join', 'TokenChef\IcoTemplate\Controllers\RegisterController@join');

            Route::post('/referral-views', 'TokenChef\IcoTemplate\Controllers\ReferralViewsController@add_view');
            Route::get('/language', 'TokenChef\IcoTemplate\Controllers\LanguageController@store');
            Route::get('/language/detect', 'TokenChef\IcoTemplate\Controllers\LanguageController@detect');
            Route::post('/newsletter/join', 'TokenChef\IcoTemplate\Controllers\NewsletterController@join');

            Route::middleware(['auth'])->group(function () {
                Route::post('change-password', 'TokenChef\IcoTemplate\Controllers\ChangePasswordController@change_my_password');
                Route::post('register', 'TokenChef\IcoTemplate\Controllers\RegisterController@register');
                Route::post('identification', 'TokenChef\IcoTemplate\Controllers\RegisterController@store_identification');
                Route::post('crowd-sale/own-deposit', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@set_own_deposit');
//                Route::post('crowd-sale/btc-own-address', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@set_btc_own_address');
                Route::post('crowd-sale/btc-generated-deposit', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@set_btc_generated_deposit');
                Route::post('crowd-sale/eth-generated-deposit', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@set_eth_generated_deposit');

                Route::post('crowd-sale/fiat-transfer', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@fiat_transfer');
                Route::post('crowd-sale/create-deposit', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@create_deposit');
                Route::post('crowd-sale/get-salt', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@get_salt');
                Route::post('crowd-sale/refresh-deposit', 'TokenChef\IcoTemplate\Controllers\CrowdSaleController@refresh');
                Route::post('referral/simple', 'TokenChef\IcoTemplate\Controllers\ReferralsController@simple');
                Route::post('referrals/chart', 'TokenChef\IcoTemplate\Controllers\ReferralsController@chart');
                Route::post('referrals/codes/table', 'TokenChef\IcoTemplate\Controllers\ReferralsController@table');
                Route::post('referrals/codes/create', 'TokenChef\IcoTemplate\Controllers\ReferralsController@store');
                Route::post('referrals/codes/{id}/delete', 'TokenChef\IcoTemplate\Controllers\ReferralsController@delete');

                Route::post('referrals/invitations/table', 'TokenChef\IcoTemplate\Controllers\InvitationsController@table');
                Route::post('referrals/invitations/send', 'TokenChef\IcoTemplate\Controllers\InvitationsController@send');
                Route::post('referrals/invitations/{id}/delete', 'TokenChef\IcoTemplate\Controllers\InvitationsController@delete');

            });

//            Route::middleware(['auth', 'admin'])->group(function () {
//                Route::post('/users/{id}/password', 'TokenChef\IcoTemplate\Controllers\ChangePasswordController@change_for_admin');
//            });

            Route::post('password/change', 'TokenChef\IcoTemplate\Controllers\ForgotPasswordController@change_password')->name('reset_password');
            Route::post('password/reset', 'TokenChef\IcoTemplate\Controllers\ForgotPasswordController@send_reset_email')->name('forgotten_password_email');

            Route::post('/verification/store', 'TokenChef\IcoTemplate\Controllers\VerificationController@store');

        });
    });

//    Route::get('/email/event', 'TokenChef\IcoTemplate\Controllers\EmailsController@event');
//    Route::get('/email/invitation', 'TokenChef\IcoTemplate\Controllers\EmailsController@invitation');
//    Route::get('/email/reset-password', 'TokenChef\IcoTemplate\Controllers\EmailsController@reset_password');
//    Route::get('/email/verification', 'TokenChef\IcoTemplate\Controllers\EmailsController@verification');
});