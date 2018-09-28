@extends('layouts.app') 
@section('title') Update a Patient's profile 
@stop 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:#DFEBFA; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
  <h3 style="margin-left: 4px; font-size: 38px; text-align:center"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
  <br>
  <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
    <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
    <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/myhistory/{{Auth::user()->id}}/edit" style="color:black;">  Personal History</a></li>
    <li><i class="fab fa-medrt" style="margin-right: 3px;"></i><a href="/patients/familyhistory/{{Auth::user()->id}}/edit" style="color:black;">  Family History</a></li>
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
  <div class="jumbotron" style="background:url({{ URL::asset('images/profile.png') }}) no-repeat center center; background-size:60%; height:250px">
  </div>
  <div class="card">
    <div class="card-header" style="background-color:#DFEBFA">
     <h3>Update My Profile</h3>
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
            <input name="middle" class="form-control" placeholder="Middle Name" value="<?= $patient->middle ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="lastname">Last Name</label>
            <input name="lastname" class="form-control" placeholder="Last Name" value={{$patient->lastname}} required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="streetnumber">Street Number</label>
            <input name="streetnumber" class="form-control" placeholder="Street Number" value={{$patient->streetnumber}}
            required>
          </div>
          <div class="form-group col-md-6">
            <label for="address_1">Address</label>
            <input name="address_1" class="form-control" type="text" value="<?= $patient->address_1 ?>" placeholder="Address" required>
          </div>

          <div class="form-group col-md-4">
            <label for="address_2">Apartment/Condo Number</label>
            <input name="address_2" class="form-control" type="text" value="<?= $patient->address_2 ?>" placeholder="Apt/Condo Number">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="city">City</label>
            <input name="city" class="form-control" type="text" value="<?= $patient->city ?>" id="city">
          </div>

          <div class="form-group col-md-3">
            <label for="state">State</label>
            <select name="state" id="state" value="<?= $patient->state ?>" class="form-control">
        <option selected><?= $patient->state ?></option>
        
            <option value="Alabama">Alabama</option>
            <option value="Alaska">Alaska</option>
            <option value="Arizona">Arizona</option>
            <option value="Arkansas">Arkansas</option>
            <option value="California">California</option>
            <option value="Colorado">Colorado</option>
            <option value="Connecticut">Connecticut</option>
            <option value="Delaware">Delaware</option>
            <option value="District Of Columbia">District Of Columbia</option>
            <option value="Florida">Florida</option>
            <option value="Georgia">Georgia</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Idaho">Idaho</option>
            <option value="Illinois">Illinois</option>
            <option value="Indiana">Indiana</option>
            <option value="Iowa">Iowa</option>
            <option value="Kansas">Kansas</option>
            <option value="Kentucky">Kentucky</option>
            <option value="Louisiana">Louisiana</option>
            <option value="Maine">Maine</option>
            <option value="Maryland">Maryland</option>
            <option value="Massachusetts">Massachusetts</option>
            <option value="Michigan">Michigan</option>
            <option value="Minnesota">Minnesota</option>
            <option value="Mississipp">Mississippi</option>
            <option value="Missouri">Missouri</option>
            <option value="Montana">Montana</option>
            <option value="Nebraska">Nebraska</option>
            <option value="Nevada">Nevada</option>
            <option value="New Hampshire">New Hampshire</option>
            <option value="New Jersey">New Jersey</option>
            <option value="New Mexico">New Mexico</option>
            <option value="New York">New York</option>
            <option value="North Carolina">North Carolina</option>
            <option value="North Dakota">North Dakota</option>
            <option value="Ohio">Ohio</option>
            <option value="Oklahoma">Oklahoma</option>
            <option value="Oregon">Oregon</option>
            <option value="Pennsylvania">Pennsylvania</option>
            <option value="Rhode Island">Rhode Island</option>
            <option value="South Carolina">South Carolina</option>
            <option value="South Dakota">South Dakota</option>
            <option value="Tennessee">Tennessee</option>
            <option value="Texas">Texas</option>
            <option value="Utah">Utah</option>
            <option value="Vermont">Vermont</option>
            <option value="Virginia">Virginia</option>
            <option value="Washington">Washington</option>
            <option value="West Virginia">West Virginia</option>
            <option value="Wisconsin">Wisconsin</option>
            <option value=">Wyoming">Wyoming</option>
          				
      </select>
          </div>
          <div class="form-group col-md-3">
            <label for="county">County</label>
            <input name="county" class="form-control" placeholder="County" value="<?=$patient->county?>" required>
          </div>
          <div class="form-group col-md-3">
            <label for="postalcode">Zip Code</label>
            <input name="postalcode" type="text" class="form-control" value="<?=$patient->postalcode?>" id="postalcode">
          </div>
        </div>


        <div class="form-row">
          <fieldset class="form-group col-md-2">
            <label for="gender">Gender</label>
            <select class="form-control" id="select_1" name="gender">
             <option><?=$patient->gender?></option>
             <option value="Male">Male</option>
             <option value="Female">Female</option>
            </select>
          </fieldset>

          <fieldset class="form-group col-md-2">
              <label for="maritalstatus">Marital Status</label>
              <select class="form-control" id="select_2" name="maritalstatus">
                <option><?=$patient->maritalstatus?></option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorce">Divorce</option>
                <option value="Widowed">Widowed</option>
              </select>
            </fieldset>
    

          <fieldset class="form-group col-md-4">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" value={{$patient->email}} placeholder="Email" >
          </fieldset>

          <fieldset class="form-group col-md-2">
            <label for="phonenumber">Phone Number</label>
            <input name="phonenumber" class="form-control" placeholder="Phone Number" value="<?=$patient->phonenumber?>" required>
          </fieldset>

          <fieldset class="form-group col-md-2">
            <label for="mobilenumber">Mobile Number</label>
            <input name="mobilenumber" class="form-control" placeholder="Mobile Number" value="<?=$patient->mobilenumber?>" required>
          </fieldset>
        </div>

        <div class="form-row" style="float:right">
          <button class="btn btn-primary">Save Profile</button>
        </form>
        <button class="btn btn-info" style="margin-left:15px"><a href="/home" style="color:white; text-decoration:none">Return Home</a></button>
      </div>
  </div>


  </div>
































  
@stop