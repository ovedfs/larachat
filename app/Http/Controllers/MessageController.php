<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        ChatEvent::dispatch([
            'username' => $request->username,
            'message' => $request->message,
        ]);
    }
}
