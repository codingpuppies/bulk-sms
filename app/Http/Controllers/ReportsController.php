<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function show_reports_page(){
        return view('reports.list-transactions');
    }
    public function get_reports_data(){
        return 'data';
    }
}
