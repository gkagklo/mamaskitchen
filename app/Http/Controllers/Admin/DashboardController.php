<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Item;
use App\Slider;
use App\Reservation;
use App\Contact;
use App\Event;

class DashboardController extends Controller
{
    
    public function index(){
        $categories_count = Category::all()->count();
        $items_count = Item::all()->count();
        $sliders_count = Slider::all()->count();
        $reservations_count = Reservation::where('status',0)->count();
        $messages_count = Contact::all()->count();
        $events_count = Event::all()->count();
        return view('admin.dashboard',compact('categories_count','items_count','sliders_count','reservations_count','messages_count','events_count'));
    }

}
