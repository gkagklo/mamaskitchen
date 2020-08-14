<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Category;
use App\Item;
use App\Event;
use App\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::with('items')->get();
        $events = Event::all();
        $galleries = Gallery::all();
        $randomItems = Item::take(10)->inRandomOrder()->get();
        return view('welcome',compact('sliders','categories','items','randomItems','events','galleries'));
    }
}
