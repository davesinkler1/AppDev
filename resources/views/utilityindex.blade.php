@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Utility Lists</div>
                    <div class="card-body">
                        <a href="{{ url('/utility/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Area</th>
                                        <th>Price per Hour</th>
                                        <th>Photo</th>
                                        <th>Update<th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($utility as $util)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $util->brand }}</td>
                                        <td>{{ $util->name }}</td>
                                        <td>{{ $util->type }}</td>
                                        <td>{{ $util->area }}</td>
                                        <td>{{ $util->price }}</td>
                                        <td>
                                            <img src="{{ asset($util->photo) }}" width= '50' height='50' class="img img-responsive" />
                                        </td>
                                        <td><a href="{{ url('/edit'.$util->id) }}" class="btn btn-sm btn-success">Edit</td>
                                        <td><form action="{{ url('/delete'.$util->id) }}" method="POST">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                        </form></td>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection