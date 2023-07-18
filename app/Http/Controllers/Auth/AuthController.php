<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\sms_verification;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'forget_password']]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = auth('api')->attempt($credentials);
        if (! $token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();

        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ],
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        Auth::login($user);
        $token = $user->createToken('api_token')->accessToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ],
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ],
        ]);
    }

    public function forget_password(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $user = User::where('email', $request->email)->get();

        if ($user->count()) {
            $code = rand(00000, 99999);
            sms_verification::where('contact_number', $request->email)->delete();
            sms_verification::create([
                'contact_number' => null,
                'contact_email' => $request->email,
                'code' => $code,
            ]);

            Mail::raw('Hi, welcome user!', function ($message) {
                $message->to('test118@gamil.com')
                ->subject('fdfd');
            });
        } else {
            return Response()->json(['msg' => 'false']);
        }
    }

    public function reset_Password(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'code' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $user = User::where('email', $request->email)->get();
        if ($user->count()) {
            $code = sms_verification::where('contact_number', $request->email)->pluck('code')->toArray();
            if ($code[0] == $request->code) {
                $user->password = $request->password;
                $user->save();

                return returnSuccessMessage('تم تغيير كلمة السر ب نجاح');
            } else {
                return returnError('الكود خاطئ', '');
            }
        }
    }
}
