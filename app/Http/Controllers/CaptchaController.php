<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{

  public function captchForm()
    {
       return view('reCaptcha.index');
    }
    public function storeCaptchaForm(Request $request)
    {
        request()->validate([
        'name' => 'required',
        'email' => 'required',
        'mobile_number' => 'required',
        'g-recaptcha-response' => 'required|captcha',
        ]);

        dd('successfully validate');
    }


    // END
}
