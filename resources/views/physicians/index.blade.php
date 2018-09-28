@extends('layouts.app') 
@section('title') Display All Physicians 
@stop 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:#DFEBFA; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 38px; text-align:center"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/myhistory/{{Auth::user()->id}}/edit" style="color:black;">  Personal History</a></li>
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/familyhistory/{{Auth::user()->id}}/edit"
                style="color:black;">  Family History</a></li>
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/physicians" style="color:black;">  Manage Physicians</a></li>
        {{--
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li> --}}
    </ul>
</div>

{{-- Start of the Main Conatiner --}}
<div class="container col-md-10" style="margin-left: 240px; padding: 0px 10px;">
    <div class="jumbotron" style="background:url({{ URL::asset('images/physicians.png') }}) no-repeat center center; background-size:100%; height:300px;">

    </div>
    <div class="card col-md-12">
        <div class="card-header" style=" background-color:#DFEBFA">

            <h2>All My Physicians:
                <a class="btn btn-info btn-lg" style="float:right; margin-left:10px; color:white" href="{{ url('home') }}">Return Home</a>
                <a class="btn btn-primary btn-lg" style="float: right" href="/physicians/create"> Add A Physician</a></h2>

        </div>
        <br>


        <div class="card-body">
            <div class="card-columns" style="column-count:3">
                @foreach ($physicians as $physician)
                <div class="card" style="text-align:center">
                    <div class="card-header" style="background-color:#DFEBFA">
                        <h4>{{$physician->nickname}}</h4>
                    </div>
                    <div class="card-body">
                        <h6>First Name: {{$physician->firstname}}</h6>
                        <h6>Last Name: {{$physician->lastname}}</h6>
                        <p>Phone Number: {{$physician->phonenumber}}</p>
                        {{-- go to a specific physician--}}
                    </div>
                    <div class="card-footer">

                        {{--
                        <form action="physicians/{{$physician->id}}" method="DELETE">
                            <input class="btn btn-info" type="submit">{{$physician->nickname}} Delete
                        </form> --}}
                        <div class="row" style="justify-content:center">
                            <a class="btn btn-info" href="/physicians/{{$physician->id}}/edit">{{$physician->nickname}} Details</a>

                            <form action="/physicians/{{ $physician->id }}" method="post">
                                {!! csrf_field() !!} {{ method_field('delete') }}
                                <button class="btn btn-danger" style="margin-left:10px" type="submit">Delete</button>
                        </div>
                        </form>

                    </div>
                </div>

                @endforeach
            </div>
           
        </div>
    </div>


</div>




@stop