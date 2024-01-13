<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
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
    protected $redirectTo = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:api-team')->except('logout');
    }

    /**
     * Handle a login request to the application.
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function login(Request $request)
    {
        $validate = $this->validateLogin($request);
        if ($validate instanceof JsonResponse) return $validate;
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($user = $this->attemptLogin($request)) {
            return $this->sendLoginResponse($user, $request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }


    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return response()->json(['status' => false, 'message' => __('The given data was invalid.'),'data'=>null, 'errors' => [$this->username() => [trans('auth.failed')]]], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
//        throw ValidationException::withMessages([
//            $this->username() => [trans('auth.failed')],
//        ]);
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param Team $team
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Team $team, Request $request)
    {
        $token = $team->createToken('Team')->accessToken;
        $team->device_token = $request->device_token;
        $team->save();
        $this->clearLoginAttempts($request);
        $team['token'] = $token;
        return response()->json([
            'status' => true,
            'message' => __('messages.login'),
            'info' => $team,
        ]);
    }


    /**
     * Attempt to log the user into the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        $credentials = $this->credentials($request);
        $team = Team::where($this->username(), $credentials[$this->username()])->first();
        if ($this->hasValidCredentials($team, $credentials)) {
            return $team;
        }
        return false;
    }


    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Determine if the user matches the credentials.
     *
     * @param mixed $team
     * @param array $credentials
     * @return bool
     */
    protected function hasValidCredentials($team, $credentials)
    {
        return !is_null($team) && $this->validateCredentials($team, $credentials);
    }


    public function validateCredentials(Team $team, array $credentials)
    {
        $plain = $credentials['password'];
        return $this->check($plain, $team->getAuthPassword());
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param string $value
     * @param string $hashedValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        if (strlen($hashedValue) === 0) {
            return false;
        }

        return password_verify($value, $hashedValue);
    }

    /**
     * Validate the user login request.
     *
     * param  \Illuminate\Http\Request $request
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function validateLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            $this->username() => 'required|exists:teams,username',
            'password' => 'required|string|min:6|max:190',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'),'info'=>null, 'errors' => $validator->errors()], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
    }


    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = $this->guard()->user();
        $user->device_token = null;
        $user->tokens->each(function($token, $key) {
            $token->delete();
        });
        return response()->json([
            'status' => true,
            'info' => null,
            'message' => trans('messages.logout')
        ]);
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('api-team');
    }


}
