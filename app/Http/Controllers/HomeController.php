<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home(){

        $user = User::get();
        $booking_records = DB::table('booking_records')->get();
        return view('home')->with('user',$user)->with('booking_records',$booking_records);
    }

    public function permissionUser(Request $request){

      $length = count($request->id);
      for($i=0 ; $i<$length ; $i++){
        DB::table('users')
            ->where('id', $request->id[$i])
            ->update([
            'admin' => $request->admin[$i],
            'employee' => $request->employee[$i]
          ]);
      }

      return redirect('/home');
    }

    public function deleteUser(Request $request){

      DB::table('users')->where('id', '=', $request->id)->delete();
      return redirect('/home');
    }

    public function updateUser(Request $request){

      DB::table('users')
          ->where('id', $request->id)
          ->update([
          'display_name' => $request->display_name,
          'gender' => $request->gender,
          'specialized' => $request->specialized,
          'mon' => $request->mon,
          'tue' => $request->tue,
          'wed' => $request->wed,
          'thur' => $request->thur,
          'fri' => $request->fri,
          'sat' => $request->sat,
          'sun' => $request->sun
        ]);
      return redirect('/home');
    }

    public function booking(Request $request){

      DB::table('booking_records')->insert(
        [
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'therapist_id' => $request->therapist_id,
          'booking_date' => $request->booking_date,
          'booking_period' => $request->booking_period,
          'symptoms' => $request->symptoms,
        ]
      );
      return view('/complete')->with('booking_records',null);
    }
}
