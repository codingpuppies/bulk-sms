<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function show_create_new_contact_form()
    {
        return view('phonebook.create-new');
    }

    public function list_contacts()
    {
        return view('phonebook.list-contacts');
    }

    public function save_contact(StoreContactRequest $request)
    {
        $contact = new Phonebook();
        $contact->first_name = $request->first_name;
        $contact->middle_name = $request->middle_name;
        $contact->last_name = $request->last_name;
        $contact->mobile_no = $request->mobile_no;
        $contact->email = $request->email;
        $contact->app_id = $request->app_id;
        $contact->save();

    }

    public function edit_contact($id)
    {
        $contact = Phonebook::find($id);
        return view('phonebook.create-new')->with('contact', $contact);
    }

    public function update_contact($id)
    {

    }

    public function delete_contact($id)
    {

    }

    public function count_contact()
    {

    }
}
