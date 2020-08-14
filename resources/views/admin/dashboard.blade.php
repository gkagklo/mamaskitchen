@extends('layouts.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_paste</i>
                  </div>
                  <p class="card-category">Categories</p>
                  
                  <h3 class="card-title">
                 {{ $categories_count }}
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <p>Total categories</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">library_books</i>
                  </div>
                  <p class="card-category">Items</p>
                  <h3 class="card-title">   {{ $items_count }} </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <p>Total items</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">slideshow</i>
                  </div>
                  <p class="card-category"> Sliders </p>
                  <h3 class="card-title">  {{ $sliders_count }} </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <p>Total sliders</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">restaurant_menu</i>
                    </div>
                    <p class="card-category"> Reservations </p>
                    <h3 class="card-title">  {{ $reservations_count }} </h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                     <p> Not confirmed reservations </p>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">mail</i>
                  </div>
                  <p class="card-category">Messages</p>
                <h3 class="card-title"> {{ $messages_count }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <p>Total messages</p>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_bar</i>
                  </div>
                  <p class="card-category">Events</p>
                <h3 class="card-title"> {{ $events_count }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <p>Total events</p>
                  </div>
                </div>
              </div>
            </div>




          </div>

        </div>
      </div>
@endsection

@push('scripts')

@endpush