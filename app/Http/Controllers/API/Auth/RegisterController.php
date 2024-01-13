<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMessage;
use App\Models\Team;
use App\VerificationCode;
use Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Response as ApiResponse;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:api-team')->except(['activateAccount', 'resendActivation']);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $data = $request->all();
        $validate = $this->validator($data);
        if ($validate instanceof JsonResponse) return $validate;
        event(new Registered($user = $this->create($data)));

//        $this->guard()->login($user);


        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'email' => 'required|email|unique:teams,email',
            'name' => 'required|min:3|max:190',
            'country' => 'required|numeric|exists:countries,id',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'data' => [$validator->errors()]], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    protected function redirectTo()
    {
        return response()->json([
            'status' => true,
            'message' => trans('messages.you_are_login')
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\Team
     */
    protected function create(array $data)
    {
        $user = Team::create($data);
        return $user;
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('api-team');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  mixed $user
     * @return mixed
     */
//    protected function registered(Request $request, $user)
//    {
//        $data['title'] = trans('messages.activate_account');
//        $data['code'] = mt_rand(100000, 999999);
//        VerificationCode::create(['student_id' => $user->id, 'code' => $data['code']]);
//        Mail::to($request['email'])->send(new ActivationMessage($data));
//        return response()->json(['status' => true, 'message' => trans('messages.mobile_register_done')]);
//    }

    public function resendActivation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:teams,email',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'data' => [$validator->errors()]], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $student = Student::whereEmail($request->email)->first();
        $data['code'] = mt_rand(100000, 999999);
        $data['student_id'] = $student->id;
        VerificationCode::create($data);
        $data['title'] = trans('messages.activate_account');
        Mail::to($request['email'])->send(new ActivationMessage($data));
        return response()->json(['status' => true, 'message' => trans('messages.activation_code_sent')]);
    }

    public function activate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:students,email',
            'code' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => trans('messages.validation_error'), 'data' => [$validator->errors()]], ApiResponse::HTTP_UNPROCESSABLE_ENTITY);
        }
        $user = Student::whereEmail($request->email)->first();

        $check = VerificationCode::latest()->whereCode($request->code)->where('student_id', $user->id)->first();

        if (empty($check)) return response()->json(['status' => false, 'message' => trans('messages.code_error')]);

        $token = bin2hex(openssl_random_pseudo_bytes(30));
        $user->is_activated = 1;
        $user->api_token = $token;
        $user->save();
        $user['country_id'] = $user->address->country_id ?? null;
        $user->address;
        return response()->json([
            'status' => true,
            'message' => trans('messages.activation_done'),
            'data' => [
                'user' => $user,
                'api_token' => $user->api_token,
            ],
        ]);
    }
}
