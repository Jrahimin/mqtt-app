<?php

namespace App\Http\Controllers;

use App\Client_messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function display(){
        
        //display the messages.
        $messages=Client_messages::paginate(5);
    return view('message',compact('messages'));
    }
}
