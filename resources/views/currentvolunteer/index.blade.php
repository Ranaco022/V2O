@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
<div class="content">
    <div class="container">
        <div class="container-fluid">
            <div class="title m-b-md">
                <h2>List of Current Volunteers</h2>
            </div>
            <div class="col-md-4">
                <a class="btn btn-info btn-md" href="{{ url('currentvolunteer/create') }}">ADD RECORDS</a>
            </div>


            <div class = "col-sm-12 col-md-12">

                <table class="table table-striped">
                    <tr>
                        <th class="tg-ddb2">First Name</th>
                        <th class="tg-0lax">Last Name</th>
                        <th class="tg-0lax">Address</th>
                        <th class="tg-0lax">Email</th>
                        <th class="tg-0lax">Home #</th>
                        <th class="tg-0lax">Cell #</th>
                        <th class="tg-0lax">Hours Worked</th>

                    </tr>
                    @if(!empty($currentvolunteers))
                        @foreach ($currentvolunteers as $currentvolunteer)
                            <tr>
                                <td class="tg-buh4">{{$currentvolunteer->firstName}}</td>
                                <td class="tg-buh4">{{$currentvolunteer->lastName}}</td>
                                <td class="tg-buh4">{{$currentvolunteer->homeAddress}}</td>
                                <td class="tg-buh4">{{$currentvolunteer->emailAddress}}</td>
                                <td class="tg-buh4">{{$currentvolunteer->homeNumber}}</td>
                                <td class="tg-buh4">{{$currentvolunteer->cellNumber}}</td>
                                <td class="tg-buh4">{{$currentvolunteer->hoursWorked}}</td>
                                <th><a class="btn btn-info btn-md" href="/currentvolunteer/{{$currentvolunteer->id}}/edit" class="">Edit</a></th>

                                <th>
                                    {!! Form::open(array('method' => 'DELETE', 'url' =>'/timetable/' .$currentvolunteer->id, 'class' => '')) !!}
                                    {!!Form::submit('Delete', array('class' => 'class="btn btn-danger btn-md "' )) !!}
                                    {!!Form::close() !!}
                                </th>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
        </div>

</div>
</div>

@endsection
