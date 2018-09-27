@extends('layouts.app')

@section('title')
Create a Physician
@stop

@section('content')
  {{-- <h1>Create Physician's info {{$physician->id}}</h1> --}}

    <hr>

  <form action="/physicians" method="post">
    

     <fieldset class="form-group">
      <label for="nickname" >Nick Name</label>
      <input name="nickname" class="form-control" placeholder="Nick Name" value="" required>
    </fieldset>

   <fieldset class="form-group">
      <label for="firstname" >First Name</label>
      <input name="firstname" class="form-control" placeholder="First Name" value="" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="middle" >Middle Name</label>
      <input name="middle" class="form-control" placeholder="Middle" value="" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="lastname" >Last Name</label>
      <input name="lastname" class="form-control" placeholder="Last Name" value="" required>
    </fieldset>


     <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control"  value="" placeholder="Email" >
    </fieldset>


     <fieldset class="form-group">
      <label for="streetnumber" >Street Number</label>
      <input name="streetnumber" class="form-control" placeholder="Street Number" value="" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="address_1" >Address</label>
      <input name="address_1" class="form-control" type="text" value="" placeholder="Address">
    </fieldset>
       <fieldset class="form-group">
      <label for="address_2" >Address</label>
      <input name="address_2" class="form-control" type="text" value="" placeholder="Address">
    </fieldset>
   
     
    <fieldset class="form-group">
      <label for="city" >City</label>
      <input name="city" class="form-control" placeholder="City" value="" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="county" >County</label>
      <input name="county" class="form-control" placeholder="County" value="" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="state" >State</label>
      <input name="state" class="form-control" placeholder="State" value="" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="postalcode" >Postal Code</label>
      <input name="postalcode" class="form-control" placeholder="Postal Code" value="" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="phonenumber" >Phone Number</label>
      <input name="phonenumber" class="form-control" placeholder="Phone Number" value="" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="mobilenumber" >Mobile</label>
      <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="" required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>
   
 {{ csrf_field() }}
  </form>
  <a class="btn btn-success" href="{{ url('physicians') }}">Back</a>
  {{-- <button class="btn btn-success"><-- Back</button> --}}

@stop