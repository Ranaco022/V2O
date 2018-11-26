@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <!--div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div-->
    @endif
    <div class="content">
        <section class="w3-container">
        @if($errors->any())
            <section class="w3-red">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </section>
        @endif
            <div class = "container">
                <div class="container-fluid">
                    <h2>Update Current Volunteer </h2>
                    <section class="w3-container">
                        @if($errors->any())
                            <section class="w3-red">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </section>
                        @endif
                    </section>
                    <!--h3>Account Information</h3-->
                    {!! Form::open (array('method'=> 'PUT','url' => '/currentvolunteer/'.$currentvolunteer->id,'class'=>'form-group')) !!}
                    <div class="row">
                        <div class="col-sm-4 col-md-4">

                            <div class="form-group">
                                {!!Form::Label('firstName', "First Name:") !!}
                                {!!Form::text('firstName',$currentvolunteer->firstName, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!!Form::Label('lastName', 'Last Name') !!}
                                {!!Form::text('lastName', $currentvolunteer->lastName,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                {!!Form::Label('cellNumber', 'Cell #') !!}
                                {!!Form::text('cellNumber',$currentvolunteer->cellNumber, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!!Form::Label('homeNumber', 'Home #') !!}
                                {!!Form::text('homeNumber',$currentvolunteer->homeNumber,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                {!!Form::Label('hoursWorked', 'Hours Worked') !!}
                                {!!Form::text('hoursWorked', $currentvolunteer->hoursWorked,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!!Form::Label('emailAddress', 'Email') !!}
                                {!!Form::text('emailAddress', $currentvolunteer->emailAddress,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::Label('homeAddress', 'Address') !!}
                        {!!Form::text('homeAddress',$currentvolunteer->homeAddress,['class'=>'form-control'] ) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::Label('comments', 'Comments') !!}
                        {!!Form::textarea('comments',$currentvolunteer->comments,['class'=>'form-control', 'rows'=>8]) !!}
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                {!!Form::submit('UPDATE RECORD',['class'=>'btn btn-outline-primary','style' => 'width:100%;' ]) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <a href="{{ route('currentvolunteer.show', $currentvolunteer->id) }}" class="btn btn-outline-primary" style="width:100%;">VIEW REPORT</a>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                {!! Form::open(array('method' => 'DELETE', 'url' =>'/timetable/' .$currentvolunteer->id, 'class' => 'form-group')) !!}
                                    {!!Form::submit('DELETE RECORD', array('class' => 'btn btn-outline-danger','style' => 'width:100%;' )) !!}
                                {!!Form::close() !!}
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </div>
</div>
@endsection
