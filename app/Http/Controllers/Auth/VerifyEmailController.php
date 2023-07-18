<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::find($request->route('id'));

        if ($user->hasVerifiedEmail()) {
            return response('/email/verify/already-success');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return response('/email/verify/success');
    }
}
