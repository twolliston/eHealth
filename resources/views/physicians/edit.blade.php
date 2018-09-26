@extends('layouts.app')

@section('title')
Update a Physician
@stop

@section('content')
  <h1>Update Physician's info {{$physician->nickname}} {{$physician->id}}</h1>

    <hr>

  <form action="/physicians/{{ $physician->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}

     <fieldset class="form-group">
      <label for="nickname" >Nick Name</label>
      <input name="nickname" class="form-control" placeholder="Nick Name" value="<?=$physician->nickname?>" required>
    </fieldset>

      <fieldset class="form-group">
      <input name="physicianid" class="form-control" hidden value={{$physician->physicianid}}>
    </fieldset>

   <fieldset class="form-group">
      <label for="firstname" >First Name</label>
      <input name="firstname" class="form-control" placeholder="First Name" value="<?=$physician->firstname?>" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="middle" >Middle Name</label>
      <input name="middle" class="form-control" placeholder="Middle" value="<?=$physician->middle?>" required>
    </fieldset>

     <fieldset class="form-group">
      <label for="lastname" >Last Name</label>
      <input name="lastname" class="form-control" placeholder="Last Name" value={{$physician->lastname}} required>
    </fieldset>


     <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" type="email" class="form-control"  value={{$physician->email}} placeholder="Email" >
    </fieldset>


     <fieldset class="form-group">
      <label for="housenumber" >House Number</label>
      <input name="housenumber" class="form-control" placeholder="House Number" value={{$physician->housenumber}} required>
    </fieldset>

     <fieldset class="form-group">
      <label for="address_1" >Address</label>
      <input name="address_1" class="form-control" type="text" value="<?= $physician->address_1?>" placeholder="Address">
    </fieldset>
       <fieldset class="form-group">
      <label for="address_2" >Address</label>
      <input name="address_2" class="form-control" type="text" value="<?= $physician->address_2?>" placeholder="Address">
    </fieldset>
   
     
     <fieldset class="form-group">
      <label for="city" >City</label>
      <input name="city" class="form-control" placeholder="City" value="<?= $physician->city ?>" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="county" >County</label>
      <input name="county" class="form-control" placeholder="County" value="<?=$physician->county?>" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="state" >State</label>
      <input name="state" class="form-control" placeholder="State" value="<?=$physician->state?>" required>
    </fieldset>

       <fieldset class="form-group">
      <label for="postalcode" >Postal Code</label>
      <input name="postalcode" class="form-control" placeholder="Postal Code" value="<?=$physician->postalcode?>" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="phonenumber" >Phone Number</label>
      <input name="phonenumber" class="form-control" placeholder="Phone Number" value="<?=$physician->phonenumber?>" required>
    </fieldset>

      <fieldset class="form-group">
      <label for="mobilenumber" >Mobile</label>
      <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="<?=$physician->mobilenumber?>" required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>

  </form>

@stop