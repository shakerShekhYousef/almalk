<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Traits\UserTraits\UserRelationship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    use UserRelationship;

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    //
    public function sendMessage(Request $request)
    {
        // Do the validation...

        // Send the message from the current user to the user with ID of 1,
        // You probably always want the current logged-in user as the sender.
        // We talk about the recipient later...
        //
        $user = User::find(auth()->user()->id);
        // return $user;
        $user->sent()
        ->create([
            'body' => $request->body,
            'subject' => $request->subject,
            'sent_to_id' => 2,
        ]);

        // Set flash message, render view, etc...
    }

    public function reseveMessage(Request $request)
    {
        $user = User::find(auth()->user()->id);

        return $user->received;
    }

    public function composeMessage()
    {
        // ...

        // Get a collection of `[id => name]` probable recipients,
        // so that the logged-in user can choose from. Note that
        // you probably want to exclude the current user herself
        // from the list.
        $users = User::where('id', '!=', Auth::id())->pluck('first_name', 'id');

        return $users;
    }
}
