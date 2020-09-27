<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class UserController extends Controller
{
    //
    public function index(User $user) {
        $messages = Message::where('receiver_user_id', '=', 1)->orderBy('created_at', 'desc')->get();
        return ['messages' => $messages];
    }
}
