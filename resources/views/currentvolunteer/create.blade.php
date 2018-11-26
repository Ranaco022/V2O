@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class = "container">
        <div class="container-fluid">
        <h2>Add Volunteer </h2>
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
                {!! Form::open (array('url' => '/currentvolunteer','class'=>'form-group')) !!}
            <div class="row">
                <div class="col-sm-3 col-md-6">

                    <div class="form-group">
                     {!!Form::Label('firstname', "First Name:") !!}
                        {!!Form::text('firstname','', ['placeholder'=>'Bob','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                      {!!Form::Label('lastName', 'Last Name') !!}
                        {!!Form::text('lastName', '',['placeholder'=>'Hope','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                     {!!Form::Label('homeAddress', 'Address') !!}
                         {!!Form::text('homeAddress','',['placeholder'=>'Cave Hill, St.Michael','class'=>'form-control'] ) !!}
                    </div>
                </div>

                <div class="col-sm-9 col-md-6">
                    <div class="form-group">
                     {!!Form::Label('cellNumber', 'Cell #') !!}
                        {!!Form::text('cellNumber', '', ['placeholder'=>'246-428-8762','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                     {!!Form::Label('homeNumber', 'Home #') !!}
                         {!!Form::text('homeNumber','',['placeholder'=>'246-348-2794','class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                     {!!Form::Label('hoursWorked', 'Hours Worked') !!}
                        {!!Form::text('hoursWorked', '',['placeholder'=>'324','class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
                <div class="form-group">
                    {!!Form::Label('comment', 'Comments') !!}
                    {!!Form::textarea('comment','',['placeholder'=>'Satisfactory','class'=>'form-control', 'rows'=>8]) !!}
                </div>

                 {!!Form::submit('ADD',['class'=>'btn btn-outline-primary btn-block' ]) !!}
            {!! Form::close() !!}

        </div>
    </div>
    </div>
</div>
@endsection
