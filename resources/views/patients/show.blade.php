@extends('layouts.app')

@section('title')
Display a Patient
@stop

{{-- Render the details for one user --}}
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
            <h2>Welcome: {{$patient->firstname}}</h2>
            </div>
            <div class="card-body">
            <h2>ID: {{$patient->id}}<h2>
            <h2>First: {{$patient->firstname}}</h2>
            <h2>Middle: {{$patient->middle}}</h2>
            <h2>Last: {{$patient->lastname}}</h2>
            </div>
            

            <a href="/patients/{{$patient->id}}/edit" class="btn btn-warning">Edit {{$patient->firstname}}'s Info</a>
           {{-- <a href="{{ route('patients.get.destroy', {{$patient->$id}}) }}">Delete</a> --}}

           {{-- <button href="/patients/{{$patient->id}}/edit" class="btn btn-warning">Delete {{$patient->firstname}}'s Info</button> --}}
           {{-- <a href="/edit" class=btn btn-warning">Edit {{$user->name}}'s Info</a> --}}
        </div>
        
    </div>
@stop