<?php

Route::get('/sms','SmsController@index')->name('sms');
Route::post('/sms/send','SmsController@sendSMS')->name('sendSMS');

Route::get('/thankyou','StripePaymentController@thankyou')->name('thankyou');

Route::get('/checkout', 'StripePaymentController@checkout');
Route::post('/checkout/create', 'StripePaymentController@create')->name('checkout');
Route::get('stripe', 'StripePaymentController@stripe')->name('stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

// Route::get('paypal', 'PayPalController@paypal')->name('paypal');
// Route::get('payment', 'PayPalController@payment')->name('payment');
// Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
// Route::get('payment/success', 'PayPalController@success')->name('payment.success');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
