@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contacts</div>
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
                                        <td><a href="{{ url('/delete'.$util->id) }}" class="btn btn-sm btn-danger">Delete</td>
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
@endsection