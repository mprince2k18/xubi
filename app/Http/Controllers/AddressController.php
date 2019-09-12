<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    function index()
    {
      $addresses = Address::paginate(6);
      return view('dashboard.address.index',compact('addresses'));
    }


    function add_address(Request $request)
    {
      $insert_address = Address::insert($request->except('_token'));
      return back()->with('success', 'Address Added Successfully');
    }


    function edit_address($address_id)
    {
      $old_addresses = Address::findOrFail($address_id);
      return view('dashboard.address.edit_address',compact('old_addresses'));
    }

    function update_address(Request $request)
    {
      Address::find($request->address_id)->update([
        'address'   => $request->address,
        'map'       => $request->map,
        'phone'     => $request->phone,
        'mobile'    => $request->mobile,
        'email1'    => $request->email1,
        'email2'    => $request->email2,
        'facebook'  => $request->facebook,
        'twitter'   => $request->twitter,
        'linkedin'  => $request->linkedin,
        'instagram' => $request->instagram,
        'youtube'   => $request->youtube,
      ]);
      return redirect('/admin/footer')->with('update','Address Updated Successfully');

    }


}
