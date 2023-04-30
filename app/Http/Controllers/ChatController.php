<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getChat(){
        return view('chat', ['chats' => Chat::all()]);
    }
}
