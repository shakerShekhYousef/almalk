<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\sms_verification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class PhoneController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api', 'verified']);
    }

    public function send_phone_verfication()
    {
        $user = User::find(auth()->user()->id);
        if ($user->mobile_phone_number) {
            try {
                $token = env('TWILIO_AUTH_TOKEN');
                $twilio_sid = env('TWILIO_SID');
                $twilio_verify_sid = env('TWILIO_VERIFY_SID');

                $client = new Client($twilio_sid, $token);
                $phone = auth()->user()->mobile_phone_number;
                $code = rand(00000, 99999);
                $client->messages->create($phone, [
                    'from' => $twilio_verify_sid,
                    'body' => $code,
                ]);

                sms_verification::where('contact_number', $phone)->delete();

                sms_verification::create([
                    'contact_number' => $phone,
                    'contact_email' => $user->email,
                    'code' => $code,
                ]);

                return returnSuccessMessage('تم ارسال الكود');
            } catch(Exception $e) {
                return $e->getMessage();
            }
        } else {
            return 'no phone to verification';
        }
    }

    public function verify_Phone(Request $request)
    {
        $request->validate([
            'code' => 'required|max:255',
        ]);
        $user = User::find(auth()->user()->id);
        $code = sms_verification::where('contact_number', $user->mobile_phone_number)->pluck('code')->toArray();

        return $code;
        if ($code[0] == $request->code) {
            $user->isVerified = 1;
            $user->save();

            return returnSuccessMessage('تم تاكيد الكود ب نجاح');
        } else {
            return returnError('الكود خاطئ', '');
        }
    }
}
