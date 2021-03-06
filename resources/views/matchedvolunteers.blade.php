@extends('layouts.app')

@section('style')
    <style>
        .card-body p:hover
        {
            border-color: #00cc99;
            cursor: pointer;
        }
    </style>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection



@section('content')
<div class="container-fluid">
    <!--div class="row ">
        <div-- class="col-lg-6">
            <div class="card">
                <div class="card-header">Volunteers Matched to {{Auth::user()->name }}</div-->

                <!--div class="card-body"-->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--a href="{{ url('volorg') }}">Back to Main Page</a>
                    <h2>List of volunteers interested in your cause</h2>
                    <br-->


                        <div class="container-fluid">
                            @if($volunteers != null)
                                <div class="row">
                                     @foreach ($volunteers as $volunteer)
                                         @if(($volunteer->interest1 == 'Beach Cleanup')OR($volunteer->interest2 == 'Child Care'))
                                            <div class="col-sm-3 col-md-4">
                                                <div class="card" id="matched">
                                                    <div class="card-body">

                                                        <p>Name: {{ $volunteer->volunteer->firstName }} {{ $volunteer->volunteer->lastName }}</p>
                                                        <p>Email: {{ $volunteer->volunteer->email }}</p>
                                                        <!--p>Email: {{ $volunteer->interest1 }}</p-->
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                     @endforeach
                                </div>
                            @else
                                <h1>There are currently no interested volunteers</h1>
                            @endif
                        </div>


                <a href="{{ url('volorg') }}">Back to Main Page</a>


                </div>
            </div>
        </div>



        <!--div class="col-lg-6">
            <div class="card">
                <div class="card-header">Current Volunteers of {{Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('volorg') }}">Back to Main Page</a>
                        <h2>List of current volunteers in your organization</h2>
                        <br>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <a href="{{ url('currentvolunteer/create') }}" class="btn btn-primary btn-sm" style="width:70%;float:right">ADD RECORD</a>
                                </div>
                                {!! Form::open (array('method' => 'PUT','url' => '')) !!}
                                {!!Form::submit('EDIT RECORD',array('class'=>'btn btn-primary  btn-sm', 'style' => 'width:100%;margin:0 5px 0 5px;float:right;')) !!}
                                {!! Form::close() !!}

                            </div>
                        </div>
                </div>
            </div>
        </div-->
    </div>
</div>
@endsection


