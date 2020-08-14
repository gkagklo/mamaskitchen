@extends('layouts.app')

@section('title','Contact message')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">    
        <div class="col-md-12">
          <div class="card">        
            <div class="card-header card-header-primary">              
              <h4 class="card-title ">All messages</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered"  style="width:100%">
                  <thead class=" text-primary">
                    <th>  Num  </th>
                    <th> Name </th>
                    <th>  Subject  </th>
                    <th>  Sent At </th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                @foreach( $contacts as $key=>$contact)
                <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $contact->name }} </td>
                    <td> {{ $contact->subject }} </td>
                    <td> {{ $contact->created_at }} </td>
                    <td class="text-center">                  
                      <a href="{{ route('contact.show',$contact->id) }}" class="btn btn-info waves-effect">
                          <i class="material-icons">visibility</i>
                      </a>
                      <button class="btn btn-danger waves-effect" type="button" onclick="deleteContact({{ $contact->id }})" >
                          <i class="material-icons">delete</i>
                      </button>
                    <form id="delete-form-{{ $contact->id }}" action="{{ route('contact.destroy',$contact->id) }}" method="POST" style="display:none;">
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
  function deleteContact(id) {
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
</script>

@endpush