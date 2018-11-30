@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;


  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <br>
  <h3> List of current volunteers </h3>

<a class="btn btn-info" href="{{ url('currentvolunteer/create') }}">Add Record</a>

<br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Address</td>
          <td>E-mail</td>
          <td>Home</td>
          <td>Cell</td>
          <td>Hours Worked</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
      @if(!empty($currentvolunteers))
        @foreach($currentvolunteers as $currentvolunteer)
        <br>
        <tr>
            <td>{{$currentvolunteer->firstName}}</td>
            <td>{{$currentvolunteer->lastName}}</td>
            <td>{{$currentvolunteer->homeAddress}}</td>
            <td>{{$currentvolunteer->emailAddress}}</td>
            <td>{{$currentvolunteer->homeNumber}}</td>
            <td>{{$currentvolunteer->cellNumber}}</td>
            <td>{{$currentvolunteer->hoursWorked}}</td>
            <td><a href="{{ route('currentvolunteer.edit',$currentvolunteer->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('currentvolunteer.destroy', $currentvolunteer->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
      @endif
    </tbody>
  </table>
@endsection
