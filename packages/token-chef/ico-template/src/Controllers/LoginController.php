<?php

namespace TokenChef\IcoTemplate\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use TokenChef\IcoTemplate\Services\RedirectService;
use TokenChef\IcoTemplate\Services\UserService;

class LoginController extends RestController
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/my-account';

    public $maxAttempts = 5; // max attempt
    public $decayMinutes = 30; // wait time in minutes


    /**
     * @param Request $request
     * @throws ValidationException
     */
    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        return $this->json_error(trans('auth.throttle', ['minutes' => intval($seconds / 60)]));
    }


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        return $this->json_success(null, [
            'url' => RedirectService::get_redirect($user)
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return $this->json_error(trans('auth.failed'));
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     */
    public function login(Request $request)
    {
        try {

            $form = \Request::get('form');
            $email = isset($form['email']) ? $form['email'] : null;
            $password = isset($form['password']) ? $form['password'] : null;

            if (is_array($email)) {
                \Log::info('Hack try!!!');
                $request->merge(array('email' => 'hack@tokenchef.com'));
                $this->incrementLoginAttempts($request);
                throw new \ErrorException('Wrong data');
            }
            $request->merge(array('email' => utf8_encode(UserService::fix_email($email)), 'password' => $password));

            $this->validateLogin($request);

            // If the class is using the ThrottlesLogins trait, we can automatically throttle
            // the login attempts for this application. We'll key this by the username and
            // the IP address of the client making these requests into this application.
            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);
                return $this->sendLockoutResponse($request);
            }

            if ($this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            }

            // If the login attempt was unsuccessful we will increment the number of attempts
            // to login and redirect the user back to the login form. Of course, when this
            // user surpasses their maximum number of attempts they will get locked out.
            $this->incrementLoginAttempts($request);

            return $this->sendFailedLoginResponse($request);
        } catch (\ErrorException $err) {
            \Log::info('Hack try!!! ' . $err->getMessage());
            $this->incrementLoginAttempts($request);
            return $this->sendFailedLoginResponse($request);
        }
    }

}