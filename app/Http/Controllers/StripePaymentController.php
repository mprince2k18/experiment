<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Checkout;

class StripePaymentController extends Controller
{
  /**
* success response method.
*
* @return \Illuminate\Http\Response
*/
public function checkout()
{
   return view('stripe.checkout');
}


public function create(Request $request)
{
   Checkout::insert([
     'amount'=>$request->amount,
   ]);

   $amount = $request->amount;

   return view('stripe.stripe',compact('amount'));
}


public function stripe()
{
   return view('stripe.stripe');
}


public function thankyou()
{
   return view('stripe.thankyou');
}

/**
* success response method.
*
* @return \Illuminate\Http\Response
*/
public function stripePost(Request $request)
{
   Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
   Stripe\Charge::create ([
           "amount" => 100 * $request->moneyToPayinput,
           "currency" => "usd",
           "source" => $request->stripeToken,
           "description" => "Test payment from Prince"
   ]);

   Session::flash('success', 'Payment successful!');

   return redirect()->route('thankyou');
   // return back();
}
    //END
}
