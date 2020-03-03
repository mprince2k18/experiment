<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sms;
use Nexmo;

class SmsController extends Controller
{
    // index
    function index()
    {
      return view('sms.index');
    }

// sendSMS
    public function sendSMS(Request $request)
    {

        Sms::insert([
          'phone'=>$request->phone,
          'message'=>$request->message,
        ]);

        Nexmo::message()->send([
          // 'to'   => '+8801685755707',
          'to'   => '+88'.$request->phone,
          'from' => 'PRINCE',
          'text' => $request->message
      ]);

        return back()->with('message send successfully');
    }
    //END
}
