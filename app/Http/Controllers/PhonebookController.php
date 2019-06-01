<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function show_create_new_contact_form(){
        return view('phonebook.create-new');
    }

    public function list_contacts(){
        return view('phonebook.list-contacts');
    }
}
