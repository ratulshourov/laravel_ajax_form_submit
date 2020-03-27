<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function create()
    {

        return view('contact_form');
    }

    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->mobile_number = $request->mobile_number;
        $contact->message = $request->message;
        $contact->save();

        return response()->json(['success' => 'Form is successfully submitted!']);

    }

    public function contactList()
    {
        $contact = Contact::all();
        return view('contact-list', array('contact' => $contact));
    }

    public function contactEdit($id)
    {
        $contactFind = DB::table('contacts')->where('id', $id)->get();
        return view('contact-edit',array('contactFind'=>$contactFind));
        //var_dump($contactFind);
    }
    public function contactUpdate() {

    }

    public function contactDelete($id)
    {
        $contactFind = Contact::destroy($id);
    }
    //
}
