<?php

namespace App\Http\Controllers\Admin;
use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmed;


class ReservationController extends Controller
{
    

    public function index(){
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }

    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();  


        //Send Confirmation Email
        $email = $reservation->email;
        $name = $reservation->name;
        $messageData = ['email' => $email,'name' => $name,'code'=>base64_encode($email)];
        Mail::send('emails.reservation',$messageData,function($message) use($email){
        $message->to($email)->subject('Reservation confirmed');  });


        Toastr::success('Reservation status successfully updated!');
        return redirect()->route('reservation.index');
    }


    public function destroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        Toastr::success('Reservation successfully deleted!');
        return redirect()->route('reservation.index');
    }
}
