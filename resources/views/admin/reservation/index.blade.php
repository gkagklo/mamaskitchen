@extends('layouts.app')

@section('title','Reservation')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">    
        <div class="col-md-12">
          <div class="card">        
            <div class="card-header card-header-primary">              
              <h4 class="card-title ">All reservations</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered"  style="width:100%">
                  <thead class=" text-primary">
                    <th>  Num  </th>
                    <th> Name </th>
                    <th>  Email  </th>
                    <th>  Phone  </th>
                    <th>  Message </th>
                    <th> Status  </th>
                    <th> Number of people </th>
                    <th>  Date and time  </th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                @foreach( $reservations as $key=>$reservation)
                <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $reservation->name }} </td>
                    <td> {{ $reservation->email }} </td>
                    <td> {{ $reservation->phone }} </td>
                    <td> {{ $reservation->message }} </td>
                    <td>
                        @if($reservation->status == true)
                        <span style="background-color:green;font-size:17px;color:white;padding:3px;">Confirmed</span>
                        @else
                        <span style="background-color:red;font-size:17px;color:white;padding:3px;">Not confirmed</span>
                        @endif
                    </td>
                    <td> {{ $reservation->num_people }} </td>
                    <td> Date: {{ $reservation->date }}<br>  Time: {{ $reservation->time }}  </td>
                    <td class="text-center">  

                      @if($reservation->status == false)               
                        <button class="btn btn-info waves-effect" type="button" onclick="updateStatus({{ $reservation->id }})" >
                            <i class="material-icons">done</i>
                        </button>
                        <form id="update-form-{{ $reservation->id }}" action="{{route('reservation.status',$reservation->id)}}" method="POST" style="display:none;">
                            {{ csrf_field() }}
                        </form>
                        @endif

                        
                      <button class="btn btn-danger waves-effect" type="button" onclick="deleteReservation({{ $reservation->id }})" >
                          <i class="material-icons">delete</i>
                      </button>
                  <form id="delete-form-{{ $reservation->id }}" action="{{route('reservation.destroy',$reservation->id)}}" method="POST" style="display:none;">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                      </form>
                      </td>
                </tr>
                 @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection

@push('scripts')

<script type="text/javascript">      
  function deleteReservation(id) {
      swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false,
          reverseButtons: true
      }).then((result) => {
          if (result.value) {
              event.preventDefault();
              document.getElementById('delete-form-'+id).submit();
          } else if (
              // Read more about handling dismissals
              result.dismiss === swal.DismissReason.cancel
          ) {
              swal(
                  'Cancelled',
                  'Your data is safe :)',
                  'error'
              )
          }
      })
  }

  function updateStatus(id) {
      swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, update it!',
          cancelButtonText: 'No, cancel!',
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false,
          reverseButtons: true
      }).then((result) => {
          if (result.value) {
              event.preventDefault();
              document.getElementById('update-form-'+id).submit();
          } else if (
              // Read more about handling dismissals
              result.dismiss === swal.DismissReason.cancel
          ) {
              swal(
                  'Cancelled',
                  'Your data is safe :)',
                  'error'
              )
          }
      })
  }


</script>

@endpush