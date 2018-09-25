@extends('layouts.app')

@section('title')
Update a Patient's profile
@stop

@section('content')

 {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 200px; position: fixed; z-index: 1; background-color:blue; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 30px"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 25px; display: block; list-style: none;">
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
        {{-- <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
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




<div class="container" style="margin-left: 260px; padding: 0px 10px;">


<div class="jumbotron">
     <h1>Update My Profile {{$patient->firstname}}</h1>
</div>



  <form action="/patients/profile/{{ $patient->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}



  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="firstname" >First Name</label>
      <input name="firstname" class="form-control" placeholder="First Name" value="<?= $patient->firstname ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="middle" >Middle Name</label>
      <input name="middle" class="form-control" placeholder="Middle" value="<?= $patient->middle ?>" required>
    </div>
    <div class="form-group col-md-4">
       <label for="lastname" >Last Name</label>
      <input name="lastname" class="form-control" placeholder="Last Name" value={{$patient->lastname}} required>
    </div>
  </div>

<div class="form-row">
  <div class="form-group col-md-2">
    <label for="housenumber" >House Number</label>
    <input name="housenumber" class="form-control" placeholder="House Number" value={{$patient->housenumber}} required>
  </div>
  <div class="form-group col-md-6">
    <label for="address_1" >Address 1</label>
    <input name="address_1" class="form-control" type="text" value="<?= $patient->address_1 ?>" placeholder="Address 1">
  </div>

   <div class="form-group col-md-4">
    <label for="address_2" >Address 2</label>
    <input name="address_2" class="form-control" type="text" value="<?= $patient->address_2 ?>" placeholder="Address 2">
  </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="city">City</label>
      <input name="city" class="form-control" type="text" value="<?= $patient->city ?>"  id="city">
    </div>
    <div class="form-group col-md-3">
      <label for="state">State</label>
      <select id="state" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
     <label for="county" >County</label>
      <input name="county" class="form-control" placeholder="County" value="<?=$patient->county?>" required>
    </div>
    <div class="form-group col-md-2">
      <label for="postalcode">Zip</label>
      <input name="postalcode" type="text" class="form-control" value="<?=$patient->postalcode?>" id="postalcode">
    </div>
  </div>

<hr>

<div class="form-row">
  <fieldset class="form-group col-md-2">
      <label for="gender" >Marital Status</label>
      <select class="form-control" id="select_1" name="gender">
        <option value=0>---select one--</option>
          <option value=1>Male</option>
        <option value=2>Female</option>
        <option value=3>Other</option>
      </select>
  </fieldset>

  <fieldset class="form-group col-md-4">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control"  value={{$patient->email}} placeholder="Email" >
  </fieldset>

  <fieldset class="form-group col-md-3">
      <label for="phonenumber" >Phone Number</label>
      <input name="phonenumber" class="form-control" placeholder="Phone Number" value="<?=$patient->phonenumber?>" required>
  </fieldset>

  <fieldset class="form-group col-md-3">
      <label for="mobilenumber" >Mobile</label>
      <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="<?=$patient->mobilenumber?>" required>
  </fieldset>

<hr>

<?php
 if (!empty($patient->my_history)) {
   $myhistory = explode(",", $patient->my_history);
} else {
  // Set array to blanks if null
 $myhistory =[];
}
?>


<div class="checkbox">
<label>
   <input type="checkbox" name="my_history[]" value="Happy"
    {{in_array("Happy",$myhistory)?"checked":""}}>
  Happy
</label>

   
   
  <label>
   <input type="checkbox" name="my_history[]" value="Sad"
   {{in_array("Sad",$myhistory)?"checked":""}}>
     Sad
  </label>
   
  <label>
   <input type="checkbox" name="my_history[]" value="Sleepy"
   {{in_array("Sleepy",$myhistory)?"checked":""}}>
     Sleepy
  </label>
   <label>

   <input type="checkbox" name="my_history[]" value="Hungry"
   {{in_array("Hungry",$myhistory)?"checked":""}}>
     Hungry
  </label> 
 
</div>

<hr>

<button class="btn btn-primary">Submit</button>


  </form>

  </div>

@stop