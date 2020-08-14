<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/gallery'))
            {
                mkdir('uploads/gallery', 0777 , true);
            }
            $image->move('uploads/gallery',$imagename);
        }else {
            $imagename = 'default.png';
        }

        $gallery = new Gallery();
        $gallery->image = $imagename;
        $gallery->save();
        Toastr::success('Gallery successfully saved!');
        return redirect()->route('gallery.index');
        
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',compact('gallery'));
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
            'image' => 'mimes:jpeg,jpg,bmp,png'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->title);
        $gallery = Gallery::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/gallery'))
            {
                mkdir('uploads/gallery', 0777 , true);
            }
            $image->move('uploads/gallery',$imagename);
        }else {
            $imagename = 'default.png';
        }

        if (file_exists('uploads/gallery/'.$gallery->image))
        {
            unlink('uploads/gallery/'.$gallery->image);
        }
        $gallery->image = $imagename;
        $gallery->save();
        Toastr::success('Gallery successfully updated!');
        return redirect()->route('gallery.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if (file_exists('uploads/gallery/'.$gallery->image))
        {
            unlink('uploads/gallery/'.$gallery->image);
        }
        $gallery->delete();
        Toastr::success('Gallery successfully deleted!');
        return redirect()->route('gallery.index');
    }
}
