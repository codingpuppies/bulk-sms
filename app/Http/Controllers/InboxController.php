<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function show_write_sms_form(){
        return view('inbox.compose');
    }

    public function show_message_list(){
        return view('inbox.messages');
    }
}
