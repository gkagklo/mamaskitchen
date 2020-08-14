<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Slider;

class EventController extends Controller
{
   public function show(){
       $events = Event::all();
       $sliders = Slider::all();
       return view('event.show',compact('events','sliders'));
   }
}
