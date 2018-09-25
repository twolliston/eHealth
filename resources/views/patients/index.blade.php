@extends('layouts.app')

@section('title')
Display All Patient
@stop

@section('content')
<div class="container">
    <h2>All Patients</h2>
    @foreach ($patients as $patient)
        <div class="Card">
            <p> First Name: {{$patient->firstname}}</p>
            <p> Last Name: {{$patient->lastname}}</p>
            {{-- go to a specific patient--}}
            <a class="btn btn-success" href="/patients/{{$patient->id}}">{{$patient->firstname}} Details</a>
        </div>  
    <br>
    @endforeach
</div>
@stop