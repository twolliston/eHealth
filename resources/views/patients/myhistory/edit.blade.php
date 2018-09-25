@extends('layouts.app') 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:blue; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 30px"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/51/edit" style="color:black;">  Profile</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/51/edit" style="color:black;">  Patient History</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Family History</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 4</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 5</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 6</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 7</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 8</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 9</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 10</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 11</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 12</a></li>
    </ul>
</div>

{{-- Start of the Main Content --}}
<div class="container col-md-10" style="margin-left: 240px; padding: 0px 10px;">
    <div class="jumbotron">
        <p>kjsahdlkadkjadklldajl</p>
    </div>
    <div class="card">
        <div class="card-header">
            Patient History for {{$patient->firstname}} {{$patient->lastname}}
        </div>
        <div class="card-body">
            <form action="/patients/{{ $patient->id }}" method="post">
                {{ csrf_field() }} {{ method_field('PATCH')}}
            
            
            
            
            </form>
        </div>
    </div>
</div>
@endsection