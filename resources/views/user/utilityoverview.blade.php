@extends('layouts.app')

@section('content')
<div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Brand</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Area</th>
                                        <th>Price per Hour</th>
                                        <th>Photo</th>
                                </thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $utility->brand }}</td>
                                        <td>{{ $utility->name }}</td>
                                        <td>{{ $utility->type }}</td>
                                        <td>{{ $utility->area }}</td>
                                        <td>{{ $utility->price }}</td>
                                        <td>
                                            <img src="{{ asset($utility->photo) }}" width= '100' height='100' class="img img-responsive" />
 
 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><br>

    <div class="inline-block">
        <a href="{{ url('/confirm') }}" class="btn btn-sm btn-success">Confirm</a>
        <a href="{{ url('/edit'.$utility->id) }}" class="btn btn-sm btn-success">Edit</a>
        <a href="{{ url('/cancel'.$utility->id) }}" class="btn btn-sm btn-danger">Cancel</a>
    </div>

</div>

@endsection