<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function Chat()
    {
        $user = Auth::User();
        $messages = Message::all();
        return view('ChatView',['user'=>$user, 'messages'=>$messages]);

    }

    public function Message()
    {
        $user = Auth::User();
        $messages = Message::all();
        return view('getmessages',['user'=>$user, 'messages'=>$messages]);

    }

    public function Ajout(Request $request, $id)
    {
        Message::create([
            'text' => $request->montext,
            'user_id' => $id,
        ]);

        return redirect('/chat');
    }




}
