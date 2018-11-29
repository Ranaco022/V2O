@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6 col-md-12">
                    <div class="card">
                        <div class="card-header"><h2>{{Auth::user()->name }} Profile</h2></div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif


                                <p><a href="{{ url('/') }}">Volunteer Organization's Information goes here</a></p>
                            </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
@endsection



