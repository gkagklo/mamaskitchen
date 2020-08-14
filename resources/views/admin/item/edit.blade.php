@extends('layouts.app')

@section('title','Edit item')

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
              <h4 class="card-title ">Edit item</h4>
            </div>
            <div class="card-body">
            <form method="POST" action=" {{ route('item.update',$item->id) }} " enctype="multipart/form-data">   
                {!! csrf_field() !!}
                {{ method_field('PUT') }}

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Category</label>                 
                        <select class="form-control" name="category" >
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select> 
                      </div>
                    </div>
                </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $item->description }}">
                          </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $item->price }}">
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