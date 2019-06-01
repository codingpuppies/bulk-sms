<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function list_schedules(){
        return view('schedules.list-schedules');
    }

    public function show_create_new_schedule_form(){
        return view('schedules.create-new');
    }
}
