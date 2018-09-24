@extends('layouts.app')

@section('title')
Create a Patient
@stop

@section('content')
  <h1>Create Patient</h1>

    <hr>

  <form action="/patients" method="post">

<fieldset class="form-group">
      <label for="firstname" >First Name</label>
      <input name="firstname" class="form-control" placeholder="First Name" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="middle" >Middle Name</label>
      <input name="middle" class="form-control" placeholder="Middle" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="lastname" >Last Name</label>
      <input name="lastname" class="form-control" placeholder="Last Name" required>
    </fieldset>

    <select class="form-control" id="select_1" name="gender">
      <option value=0>---select one--</option>
        <option value=1>Male</option>
      <option value=2>Female</option>
      <option value=3>Other</option>
    </select>

     <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control" placeholder="Email">
    </fieldset>

    <select class="form-control" id="select_2" name="maritalstatus">
      <option value=0>---select one--</option>
        <option value=1>Single</option>
      <option value=2>Married</option>
      <option value=3>Divorce</option>
    </select>

     <fieldset class="form-group">
      <label for="housenumber" >House Number</label>
      <input name="housenumber" class="form-control" placeholder="House Number" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="address" >Address</label>
      <input name="address" class="form-control" placeholder="Address">
    </fieldset>

     <fieldset class="form-group">
      <label for="city" >City</label>
      <input name="city" class="form-control" placeholder="City" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="county" >County</label>
      <input name="county" class="form-control" placeholder="County" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="state" >State</label>
      <input name="state" class="form-control" placeholder="State" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="postalcode" >Postal Code</label>
      <input name="postalcode" class="form-control" placeholder="Postal Code" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="phonenumber" >Phone Number</label>
      <input name="phonenumber" class="form-control" placeholder="Phone Number" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="mobilenumber" >Mobile</label>
      <input name="mobilenumber" class="form-control" placeholder="Mobile Number" required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>

    {{ csrf_field() }}
  </form>

@stop