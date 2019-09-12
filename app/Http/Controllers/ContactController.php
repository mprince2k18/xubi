<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Address;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        $addressess = Address::all();
        return view('contact.index',compact('addressess'));
    }

    function contact_insert(Request $request)
    {
      $contacts = Contact::insert([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        'created_at' => Carbon::now(),
      ]);

      return back()->with('success','Message Sent Successfully, Thank You.');
    }



    function contact_index()
    {
      $all_contacts = Contact::paginate(5);
      return view('dashboard.contacts.index',compact('all_contacts'));
    }

    function all_read_messages()
    {
      $all_read_messages = Contact::paginate(10);
      return view('dashboard.contacts.all_read_messages',compact('all_read_messages'));
    }

    function all_unread_messages()
    {
      $all_unread_messages = Contact::paginate(10);
      return view('dashboard.contacts.all_unread_messages',compact('all_unread_messages'));
    }


    function open_message($message_id)
    {
      $all_contacts = Contact::all();
      $single_contact_read  =  Contact::findOrFail($message_id);
      return view('dashboard.contacts.open_message',compact('all_contacts','single_contact_read'));
    }




}
