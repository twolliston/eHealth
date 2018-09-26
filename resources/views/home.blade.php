@extends('layouts.app') 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:blue; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 38px; text-align:center"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 25px; display: block; list-style: none;">
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/familyhistory/{{Auth::user()->id}}/edit" style="color:black;">  Family History</a></li>
         <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/myhistory/{{Auth::user()->id}}/edit" style="color:black;">  Personal History</a></li>
        {{-- <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/physicians/{{Auth::user()->id}}/edit" style="color:black;">  Manage Physicians</a></li> --}}
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/physicians" style="color:black;">  Manage Physicians</a></li>
        {{--<li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
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

{{-- Start of the Main Content --}}
<div class="container col-md-10" style="margin-left: 240px; padding: 0px 10px;">
    <div class="jumbotron">
        <p>kjsahdlkadkjadklldajl</p>
    </div>

</div>
@endsection