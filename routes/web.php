<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home_page')->name('home');
Route::get('/token-sale', 'HomeController@token_page')->name('token-sale');
Route::get('/developers', 'HomeController@developers')->name('developers');
Route::get('/verification/{code}', 'VerificationController@show')->name('ico-template::verification');
Route::get('/confirm-account/{code}', 'VerificationController@show_for_referrals')->name('ico-template::verification_referrals');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'HomeController@login')->name('login');
    Route::get('/sign-up', 'HomeController@join')->name('sign-up');
    Route::get('/password', 'ForgotPasswordController@forgotten_password')->name('forgotten_password');
    Route::get('/reset-password/{tokens}', 'ForgotPasswordController@reset_password_form')->name('reset_password_form');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/my-account', 'ClientController@my_account')->name('my-account');
});

//Route::get('/terms-and-conditions', 'DocumentsController@terms_and_conditions')->name('terms-and-conditions');
//Route::get('/privacy-policy', 'DocumentsController@privacy_policy')->name('privacy-policy');