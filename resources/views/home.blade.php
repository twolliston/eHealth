@extends('layouts.app') 
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

{{-- Start of the Main Content --}}
<div class="container col-md-10" style="margin-left: 240px; padding: 0px 10px;">
    <div class="jumbotron" style="background:url({{ URL::asset('images/emrquestion.png') }}) no-repeat center center; background-size:100%; height:300px;">
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>What is an EMR?</h2>
            <p>An electronic medical record (EMR) is a digital version of a patient's paper chart. EMRs are real-time, patient-centered
                records that make information available instantly and securely to authorized users. While an EMR does contain
                the medical and treatment histories of patients, an EMR system is built to go beyond standard clinical data
                collected in a provider’s office and can be inclusive of a broader view of a patient’s care.</p>
        </div>
        {{--
        <div class="col-md-1"></div> --}}
        <div class="col-md-6">
            <h2>Why should I use this?</h2>
            <p>Update medical records from the comfort of your own home to quickly share with the doctor of your choice. Will
                help to save time by having information readily available to you and having the ability to update your record
                when it's convenient for you.</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="/patients/create" style="text-align:center">
                <h3>Get Started by Filling Out Your Profile!!</h3>
            </a>
        </div>
    </div>
</div>
@endsection