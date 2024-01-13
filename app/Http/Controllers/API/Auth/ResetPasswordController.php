<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    protected $broker = 'students';
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/profile/edit';


    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string|null $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null, $hash = null)
    {
        $request['hash'] = $request->hash;
        $passwordReset = PasswordReset::whereHash($request->hash)->first();
        return view('front.auth.password.reset')->with(
            ['token' => $token, 'email' => $passwordReset->email]
        );
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student')->except('updatePassword');

    }


    public function updatePassword(Request $request)
    {
        $student = auth('api-student')->user();

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
            'old_password' => 'required|checkHashedPassword:' . $student->password
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=> false,'message' => trans('messages.validation_error'), 'data'=>[$validator->errors()]],Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $student->update(['password' => bcrypt($request['password'])]);
        return response()->json(['status' => true, 'message' => trans('messages.updated')]);
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('student');
    }

    public function broker()
    {
        return Password::broker($this->broker);
    }
}
