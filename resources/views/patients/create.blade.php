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
      <option>--select one--</option>
        <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

     <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control" placeholder="Email">
    </fieldset>

    <select class="form-control" id="select_2" name="maritalstatus">
      <option>--select one--</option>
        <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Divorce">Divorce</option>
    </select>

     <fieldset class="form-group">
      <label for="streetnumber" >Street Number</label>
      <input name="streetnumber" class="form-control" placeholder="Street Number" required>
    </fieldset>

      <fieldset class="form-group col-md-6">
      <label for="address_1" >Address</label>
      <input name="address_1" class="form-control" type="text" value="" placeholder="Address">
    </fieldset>
    
       <fieldset class="form-group col-md-3">
      <label for="address_2" >Suite Number</label>
      <input name="address_2" class="form-control" type="text" value="" placeholder="Address">
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