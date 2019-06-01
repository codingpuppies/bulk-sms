<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show_personal_settings(){
        return view('settings.personal');
    }

    public function show_sms_settings(){
        return view('settings.sms');
    }
}
