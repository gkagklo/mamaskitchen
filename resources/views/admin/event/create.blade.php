@extends('layouts.app')

@section('title','Add new event')

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
              <h4 class="card-title ">Add new event</h4>
            </div>
            <div class="card-body">
            <form method="POST" action=" {{ route('event.store') }} " enctype="multipart/form-data" >   
                {!! csrf_field() !!}
               
                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Title</label>
                                <input type="text" class="form-control" name="title">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control" name="description">
                        </div>
                      </div>
                    </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Event date</label><br>
                    <input type="date" class="form-control" name="event_date">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Event time</label><br>
                    <input type="time" class="form-control" name="event_time">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                    <label class="bmd-label-floating">Select Image: </label>
                    <input type="file"  name="image">
                </div>
              </div>
                    
                <a href=" {{route('item.index')}} " type="button" class="btn btn-danger">Back</a>  
                <button type="submit" class="btn btn-primary">Save</button>  

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