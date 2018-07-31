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

Route::middleware(['session_locale'])->group(function () {
    Route::get('/verification/{code}', 'VerificationController@show')->name('ico-template::verification');
    Route::get('/confirm-account/{code}', 'VerificationController@show_for_referrals')->name('ico-template::verification_referrals');
});

Route::middleware(['guest', 'session_locale'])->group(function () {
    Route::get('/login', 'HomeController@login')->name('login');
    Route::get('/sign-up', 'HomeController@join')->name('sign-up');
    Route::get('/password', 'ForgotPasswordController@forgotten_password')->name('forgotten_password');
    Route::get('/reset-password/{tokens}', 'ForgotPasswordController@reset_password_form')->name('reset_password_form');
});

Route::middleware(['auth', 'session_locale'])->group(function () {
    Route::get('/my-account', 'ClientController@my_account')->name('my-account');
});

Route::get('sitemap', function () {
    // create new sitemap object
    $sitemap = App::make('sitemap');
    $sitemap->setCache('laravel.sitemap', 60);
    if (!$sitemap->isCached()) {
        // add item to the sitemap (url, date, priority, freq)
        $sitemap->add(URL::to('home'), \Carbon\Carbon::now(), '1.0', 'daily');
        $sitemap->add(URL::to('token-sale'), \Carbon\Carbon::now(), '1.0', 'daily');
        $sitemap->add(URL::to('developers'), \Carbon\Carbon::now(), '1.0', 'daily');
    }
    return $sitemap->render('xml');
});

Route::middleware(['detect_language', 'cached'])->group(function () {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/token-sale', 'HomeController@token_page')->name('token-sale');
    Route::get('/developers', 'HomeController@developers')->name('developers');
});

Route::middleware(['cached'])->group(function () {
    Route::get('/{lang}', 'HomeController@home_language')->where(['lang' => '[a-zA-Z]+']);
    Route::get('/{lang}/token-sale', 'HomeController@token_page_language');
    Route::get('/{lang}/developers', 'HomeController@developers_language');
});