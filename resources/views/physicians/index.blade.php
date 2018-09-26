@extends('layouts.app')

@section('title')
Display All Physicians
@stop



@section('content')
<div class="container">
    <h2>All Physicians</h2>
    @foreach ($physicians as $physician)
        <div class="Card">
            <p> Nick Name: {{$physician->nickname}}</p>
            <p> First Name: {{$physician->firstname}}</p>
            <p> Last Name: {{$physician->lastname}}</p>
            {{-- go to a specific physician--}}
            <a class="btn btn-success" href="/physicians/{{$physician->id}}/edit">{{$physician->firstname}} Details</a>
        </div>  
    <br>
    @endforeach
   
     <a class="btn btn-success" href="/physicians/create"> Create</a>

</div>

@stop