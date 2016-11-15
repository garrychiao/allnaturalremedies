<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use Captcha;
use Input;
use Validator;
use Redirect;
use Session;
use Mail;

class IndexController extends Controller
{
  public function index()
  {
      /*
      $booking_records = DB::table('booking_records')->where('booking_date','>=',date('Y-m-d'))->get();
      $user = User::where('employee','=',true)->get();
      */
      return view('index');
  }

  public function mews() {
      return Captcha::create('default');
  }

  public function booking(Request $request){
     $rules = [
        "cpt" => 'required|captcha'
       ];
     $messages = [
        'cpt.captcha' => 'Wrong Captcha! Please try again.'
      ];
     $validator = Validator::make(Input::all(), $rules, $messages);

     if($validator->fails()) {
         return Redirect('/#contact')->withErrors($validator)->withInput();
     }else {
       Mail::send('email', ['request' => $request], function ($m) use ($request) {
            $m->from('allnaturalremedies@mail.com',$request->name);

            $m->to('g50905g@gmail.com')->subject('New Booking from '.$request->name.' !');
        });
       return view('/complete')->with('booking_records',null);

     }

  }

}
