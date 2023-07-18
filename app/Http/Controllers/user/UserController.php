<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api', 'verified'], ['except' => ['login', 'register', 'forgot_password']]);
    }

    public function index()
    {
        $user = User::find(auth()->user()->id);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $validator = Validator()->make($request->all(), [
            'first_name' => 'nullable|max:50',
            'last_name' => 'nullable|max:50',
            'office_phone' => 'nullable|max:50',
            'home_phone' => 'nullable|max:50',
            'birthday' => 'nullable|max:50',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif',
        ]);
        if ($validator->fails()) {
            return returnError($validator->errors()->first(), '');
        }
        $data = [];
        if (isset($request['first_name'])) {
            $data['first_name'] = $request['first_name'];
        }
        if (isset($request['last_name'])) {
            $data['last_name'] = $request['last_name'];
        }
        if (isset($request['office_phone'])) {
            $data['office_phone'] = $request['office_phone'];
        }
        if (isset($request['home_phone'])) {
            $data['home_phone'] = $request['home_phone'];
        }
        if (isset($request['birthday'])) {
            $data['birthday'] = $request['birthday'];
        }
        $user->update($data);
        if ($request->hasFile('image')) {
            if (isset($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
            $file = $request->file('image');
            $fileName = time().auth()->user()->id.'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('users', $fileName, 'public');
            $user->image = $path;
            $user->save();
        }

        return returnSuccessMessage($user);
    }

    public function changeEmail(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $validator = Validator()->make($request->all(), [
            'email' => 'email|max:50',
        ]);
        if ($validator->fails()) {
            return returnError($validator->errors()->first(), '');
        }
        $user->email = $request['email'];
        $user->email_verified_at = null;
        $user->save();

        return returnSuccessMessage($user);
    }

    public function addPhone(Request $request)
    {
        $request->validate([
            'phone' => 'required|max:255',
        ]);
        $user = User::find(auth()->user()->id);
        $user->mobile_phone_number = $request->phone;
        $user->save();

        return response()->json([
            'status' => 'success',
            'user' => $user, ]);
    }

 public function changePassword(Request $request)
 {
     if (! (Hash::check($request->get('password'), Auth::user()->password))) {
         return returnError('error', 'Your current password does not matches with the password you provided. Please try again.');
     }

     if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
         return returnError('error', 'New Password cannot be same as your current password. Please choose a different password.');
     }

     $request->validate([
         'password' => 'required',
         'new-password' => 'required|string',
     ]);

     // Change Password
     $user = User::find(auth()->user()->id);
     $user->password = bcrypt($request->get('new-password'));
     $user->save();

     return returnSuccessMessage($user);
 }
}
