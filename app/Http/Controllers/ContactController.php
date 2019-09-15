<?php

namespace App\Http\Controllers;

use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Contact;
use App\Address;
use Carbon\Carbon;
Use Alert;



class ContactController extends Controller
{

  use Searchable;
  
    public function index()
    {

        $addressess = Address::all();
        if (session('success')) {
          Alert::success('Message Sent Successfully', 'We will connect with you ASAP');
        }
        return view('contact.index',compact('addressess'));
    }

    function contact_insert(Request $request)
    {

      $request->validate([
        'name'      => 'required',
        'email'      => 'required',
        'subject'      => 'required',
        'message'      => 'required',
      ]);

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
      $all_contacts = Contact::latest()->paginate(10);
      // Alert::success('Message Sent Successfully', 'We will connect with you ASAP');
      return view('dashboard.contacts.index',compact('all_contacts'));
    }

    function all_read_messages()
    {
      $all_read_messages = Contact::latest()->paginate(10);
      return view('dashboard.contacts.all_read_messages',compact('all_read_messages'));
    }

    function all_unread_messages()
    {
      $all_unread_messages = Contact::latest()->paginate(10);
      return view('dashboard.contacts.all_unread_messages',compact('all_unread_messages'));
    }




    function open_message($message_id)
    {
      $all_contacts = Contact::all();
      $single_contact_read  =  Contact::findOrFail($message_id);
      return view('dashboard.contacts.open_message',compact('all_contacts','single_contact_read'));
    }

    function i_read_message(Request $request)
    {
      Contact::find($request->message_id)->update([
        'status'   => $request->status,
      ]);

      Alert::success('Successfully', 'Done');

      return redirect(route('contact_index'));
    }




}
