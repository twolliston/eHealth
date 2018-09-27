@extends('layouts.app')

@section('title')
Create a Physician
@stop

@section('content')
 {{-- Side Navbar --}}
 <div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:#DFEBFA; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 38px; text-align:center"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/myhistory/{{Auth::user()->id}}/edit" style="color:black;">  Personal History</a></li>
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/familyhistory/{{Auth::user()->id}}/edit"
                style="color:black;">  Family History</a></li>
        <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/physicians/{{Auth::user()->id}}/edit" style="color:black;">  Manage Physicians</a></li>
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
    <div class="card">
      <div class="card-header" style="background-color:#DFEBFA">
          Add A Physician
        </div>
        <div class="card-body">
          
          <form action="/physicians" method="post">
            {{ csrf_field() }}
    
<div class="form-row">
     <fieldset class="form-group col-md-4">
      <label for="nickname" >Nick Name</label>
      <input name="nickname" class="form-control" placeholder="Nick Name" value="" required>
    </fieldset>

   <fieldset class="form-group col-md-4">
      <label for="firstname" >First Name</label>
      <input name="firstname" class="form-control" placeholder="First Name" value="" required>
    </fieldset>

     {{-- <fieldset class="form-group">
      <label for="middle" >Middle Name</label>
      <input name="middle" class="form-control" placeholder="Middle" value="">
    </fieldset> --}}

     <fieldset class="form-group col-md-4">
       <label for="lastname" >Last Name</label>
       <input name="lastname" class="form-control" placeholder="Last Name" value="" required>
      </fieldset>
    </div>
    
    <div class="form-row">
    <fieldset class="form-group col-md-6">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control"  value="" placeholder="Email" >
    </fieldset>
    
    <fieldset class="form-group col-md-3">
    <label for="phonenumber" >Phone Number</label>
    <input name="phonenumber" class="form-control" placeholder="Phone Number" value="" required>
  </fieldset>
  
    <fieldset class="form-group col-md-3">
    <label for="mobilenumber" >Secondary Number</label>
    <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="" required>
  </fieldset>
    </div>
    
    <div class="form-row">
    <fieldset class="form-group col-md-3">
      <label for="streetnumber" >Street Number</label>
      <input name="streetnumber" class="form-control" placeholder="Street Number" value="" required>
    </fieldset>

     <fieldset class="form-group col-md-6">
      <label for="address_1" >Address</label>
      <input name="address_1" class="form-control" type="text" value="" placeholder="Address">
    </fieldset>
       <fieldset class="form-group col-md-3">
      <label for="address_2" >Suite Number</label>
      <input name="address_2" class="form-control" type="text" value="" placeholder="Address">
    </fieldset>
  </div>
   
     <div class="form-row">
     <fieldset class="form-group col-md-3">
      <label for="city" >City</label>
      <input name="city" class="form-control" placeholder="City" value="" required>
    </fieldset>


      <fieldset class="form-group col-md-3">
      <label for="county" >County</label>
      <input name="county" class="form-control" placeholder="County" value="" required>
    </fieldset>


       <fieldset class="form-group col-md-3">
      <label for="state" >State</label>
      <input name="state" class="form-control" placeholder="State" value="" required>
    </fieldset>

       <fieldset class="form-group col-md-3">
      <label for="postalcode" >Postal Code</label>
      <input name="postalcode" class="form-control" placeholder="Postal Code" value="" required>
    </fieldset>
  </div>
  <br>

    <button class="btn btn-primary">Submit</button>
      <a type="button" href="/physicians" class="btn btn-primary">Back</a> 
    </form>
  </div>
</div>

@stop