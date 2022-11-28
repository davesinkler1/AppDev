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
                                            <img src="{{ asset($utility->photo) }}" width= '50' height='50' class="img img-responsive" />
 
 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><br>

<form action='/confirm' method="POST">
       @csrf
       <button class="btn btn-success btn-sm" type="submit">Confirm Submission</button>
    </form>
</div>

@endsection