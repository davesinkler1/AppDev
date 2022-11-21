@extends('layouts.app')

@section('content')
<a href='\home\addutility' class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" type="button">
         Add Utility
</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection