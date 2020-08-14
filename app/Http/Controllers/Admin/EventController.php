<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view('admin.event.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/event'))
            {
                mkdir('uploads/event', 0777 , true);
            }
            $image->move('uploads/event',$imagename);
        }else {
            $imagename = 'default.png';
        }


        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->event_time =$request->event_time;
        $event->image = $imagename;
        $event->save();
        Toastr::success('Event successfully saved!');
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,bmp,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        $event = Event::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/event'))
            {
                mkdir('uploads/event', 0777 , true);
            }
            $image->move('uploads/event',$imagename);
        }else {
            $imagename = 'default.png';
        }    


        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        if (file_exists('uploads/event/'.$event->image))
        {
            unlink('uploads/event/'.$event->image);
        }
        $event->image = $imagename;
        $event->save();
        Toastr::success('Event successfully updated!');
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $event = Event::find($id);
       if (file_exists('uploads/event/'.$event->image))
       {
           unlink('uploads/event/'.$event->image);
       }
       $event->delete();
       Toastr::success('Event successfully deleted!');
       return redirect()->route('event.index');
    }
}
