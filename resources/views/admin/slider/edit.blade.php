@extends('layouts.app')

@section('title','Edit Slider')

@push('css')

@endpush

@section('content')


<div class="content">
    <div class="container-fluid">
      <div class="row">   
        <div class="col-md-12">

            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-with-icon" data-notify="container">
                <i class="material-icons" data-notify="icon">error_outline</i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span data-notify="message">{{ $error }}</span>
              </div>
            @endforeach
            @endif         

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Edit Slider</h4>
            </div>
            <div class="card-body">
            <form method="POST" action=" {{ route('slider.update',$slider->id) }} " enctype="multipart/form-data">   
                {!! csrf_field() !!}
                {{ method_field('PUT') }}
                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" value="{{ $slider->sub_title }}">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <label class="bmd-label-floating">Select Image: </label>
                                <input type="file"  name="image">
                            </div>
                    </div>
                    
                <a href=" {{route('slider.index')}} " type="button" class="btn btn-danger">Back</a>  
                <button type="submit" class="btn btn-primary">Submit</button>  

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')

@endpush