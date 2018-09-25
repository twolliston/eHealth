@extends('layouts.app') 
@section('title') Update a Patient's profile 
@stop 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:blue; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
  <h3 style="margin-left: 4px; font-size: 38px; text-align:center"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
  <br>
  <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
    <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
    <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/familyhistory/{{Auth::user()->id}}/edit" style="color:black;">  Family History</a></li>
    <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/myhistory/{{Auth::user()->id}}/edit" style="color:black;">  Personal History</a></li>
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
  <div class="jumbotron" style="background-image: url(../../../images/medical.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <p>hsdakhkdlsahdkldaahlka</p>
  </div>
  <div class="card">
    <div class="card-header">
      Profile for {{$patient->firstname}} {{$patient->lastname}}
    </div>
    <div class="card-body">
      <form action="/patients/profile/{{ $patient->id }}" method="post">
        {{ csrf_field() }} {{ method_field('PATCH')}}



        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="firstname">First Name</label>
            <input name="firstname" class="form-control" placeholder="First Name" value="<?= $patient->firstname ?>" required>
          </div>
          <div class="form-group col-md-4">
            <label for="middle">Middle Name</label>
            <input name="middle" class="form-control" placeholder="Middle" value="<?= $patient->middle ?>" required>
          </div>
          <div class="form-group col-md-4">
            <label for="lastname">Last Name</label>
            <input name="lastname" class="form-control" placeholder="Last Name" value={{$patient->lastname}} required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="housenumber">House Number</label>
            <input name="housenumber" class="form-control" placeholder="House Number" value={{$patient->housenumber}} required>
          </div>
          <div class="form-group col-md-6">
            <label for="address_1">Address 1</label>
            <input name="address_1" class="form-control" type="text" value="<?= $patient->address_1 ?>" placeholder="Address 1">
          </div>

          <div class="form-group col-md-4">
            <label for="address_2">Address 2</label>
            <input name="address_2" class="form-control" type="text" value="<?= $patient->address_2 ?>" placeholder="Address 2">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="city">City</label>
            <input name="city" class="form-control" type="text" value="<?= $patient->city ?>" id="city">
          </div>
          <div class="form-group col-md-3">
            <label for="state">State</label>
            <select id="state" class="form-control">
        <option selected>Choose...</option>
        
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          				
      </select>
          </div>
          <div class="form-group col-md-3">
            <label for="county">County</label>
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
            <label for="gender">Gender</label>
            <select class="form-control" id="select_1" name="gender">
        <option value=0>---select one--</option>
          <option value=1>Male</option>
        <option value=2>Female</option>
        <option value=3>Other</option>
      </select>
          </fieldset>

          <fieldset class="form-group col-md-4">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" value={{$patient->email}} placeholder="Email" >
          </fieldset>

          <fieldset class="form-group col-md-3">
            <label for="phonenumber">Phone Number</label>
            <input name="phonenumber" class="form-control" placeholder="Phone Number" value="<?=$patient->phonenumber?>" required>
          </fieldset>

          <fieldset class="form-group col-md-3">
            <label for="mobilenumber">Mobile</label>
            <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="<?=$patient->mobilenumber?>" required>
          </fieldset>

          <button class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

  </div>
























  
@stop