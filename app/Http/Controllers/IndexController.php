<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;

class IndexController extends Controller
{
  public function index()
  {
      $booking_records = DB::table('booking_records')->where('booking_date','>=',date('Y-m-d'))->get();
      $user = User::where('employee','=',true)->get();
      return view('index')->with('user',$user)->with('booking_records',$booking_records);
  }

}
