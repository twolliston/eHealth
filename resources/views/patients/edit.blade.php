@extends('layouts.app')

@section('title')
Update a Patient
@stop

@section('content')
  <h1>Update Patient'section info {{$patient->firstname}}</h1>

    <hr>

  <form action="/patients/{{ $patient->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}

   <fieldset class="form-group">
      <label for="firstname" >First Name</label>
      <input name="firstname" class="form-control" placeholder="First Name" value="<?=$patient->firstname?>" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="middle" >Middle Name</label>
      <input name="middle" class="form-control" placeholder="Middle" value="<?=$patient->middle?>" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="lastname" >Last Name</label>
      <input name="lastname" class="form-control" placeholder="Last Name" value={{$patient->lastname}} required>
    </fieldset>

    <label for="gender" >Marital Status</label>
    <select class="form-control" id="select_1" name="gender">
      <option value=0>---select one--</option>
        <option value=1>Male</option>
      <option value=2>Female</option>
      <option value=3>Other</option>
    </select>

     <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control"  value={{$patient->email}} placeholder="Email" >
    </fieldset>

    <label for="maritalstatus" >Marital Status</label>
    <select class="form-control" id="select_2" name="maritalstatus">
      <option value=0>---select one--</option>
        <option value=1>Single</option>
      <option value=2>Married</option>
      <option value=3>Divorce</option>
    </select>

     <fieldset class="form-group">
      <label for="housenumber" >House Number</label>
      <input name="housenumber" class="form-control" placeholder="House Number" value={{$patient->housenumber}} required>
    </fieldset>

     <fieldset class="form-group">
      <label for="address_1" >Address</label>
      <input name="address_1" class="form-control" type="text" value="<?= $patient->address_1?>" placeholder="Address">
    </fieldset>
       <fieldset class="form-group">
      <label for="address_2" >Address</label>
      <input name="address_2" class="form-control" type="text" value="<?= $patient->address_2?>" placeholder="Address">
    </fieldset>
   
     
     <fieldset class="form-group">
      <label for="city" >City</label>
      <input name="city" class="form-control" placeholder="City" value="<?= $patient->city ?>" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="county" >County</label>
      <input name="county" class="form-control" placeholder="County" value="<?=$patient->county?>" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="state" >State</label>
      <input name="state" class="form-control" placeholder="State" value="<?=$patient->state?>" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="postalcode" >Postal Code</label>
      <input name="postalcode" class="form-control" placeholder="Postal Code" value="<?=$patient->postalcode?>" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="phonenumber" >Phone Number</label>
      <input name="phonenumber" class="form-control" placeholder="Phone Number" value="<?=$patient->phonenumber?>" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="mobilenumber" >Mobile</label>
      <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="<?=$patient->mobilenumber?>" required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>

  </form>

@stop