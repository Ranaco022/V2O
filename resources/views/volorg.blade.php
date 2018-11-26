@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row ">
        <div class="col-sm-3 col-md-5">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{Auth::user()->name }}!
                    <p><a href="{{ url('showMatched') }}">List of volunteers interested in your cause.</a></p>

                    
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-7">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--Welcome {{Auth::user()->name }}!
                    <p><a href="{{ url('showMatched') }}">List of volunteers interested in your cause.</a></p-->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection



