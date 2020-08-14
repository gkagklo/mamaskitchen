<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'time' => 'required',
            'num_people' => 'required'
        ]);

        $reservation = new Reservation();
        $reservation->num_people = $request->num_people;
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();
        Toastr::success('Reservation request sent successfully!');
        return redirect()->back();
    }


  
}
