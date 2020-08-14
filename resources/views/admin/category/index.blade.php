@extends('layouts.app')

@section('title','Category')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">    
        <div class="col-md-12">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Add New</a>
          <div class="card">        
            <div class="card-header card-header-primary">              
              <h4 class="card-title ">All Categories</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered"  style="width:100%">
                  <thead class=" text-primary">
                    <th>  Num  </th>
                    <th> Name </th>
                    <th>  Slug  </th>
                    <th> Created At </th>
                    <th> Updated At</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                @foreach( $categories as $key=>$category)
                <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->slug }} </td>
                    <td> {{ $category->created_at }} </td>
                    <td> {{ $category->updated_at }} </td>
                    <td class="text-center">                  
                      <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info waves-effect">
                          <i class="material-icons">edit</i>
                      </a>
                      <button class="btn btn-danger waves-effect" type="button" onclick="deleteCategory({{ $category->id }})" >
                          <i class="material-icons">delete</i>
                      </button>
                  <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" method="POST" style="display:none;">
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
  function deleteCategory(id) {
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