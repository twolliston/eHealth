<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Brings in user model
use App\Patient;
use Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        
        // Get all the patients
        $patients = Patient::all();
        // var_dump(patients);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = Auth::user();
        $id = $user->id;

        // Get a user
        $patient = new Patient();
        $patient->user_id = $id;
        $patient->active = false;
        $patient->firstname = $request->firstname;
        $patient->middle = $request->middle;
        $patient->lastname = $request->lastname;
        $patient->address_1 = $request->address_1;
        $patient->address_2 = $request->address_2;
        $patient->streetnumber = $request->streetnumber;
        $patient->postalcode = $request->postalcode;
        $patient->city = $request->city;
        $patient->state = $request->state;
        $patient->county = $request->county;
        $patient->phonenumber = $request->phonenumber;
        $patient->mobilenumber = $request->mobilenumber;
        $patient->email = $request->email;
        $patient->birth_year = $request->birth_year;
        $patient->gender = $request->gender;
        $patient->maritalstatus = $request->maritalstatus;
        $patient->created_at = $request->created_at;
        $patient->updated_at = $request->updated_at;

        $patient->save();
        return redirect()->back();
        // var_dump($patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show one individual profile
        return view('patients.show')->withPatient(Patient::find($id));
        // return the view you want to list
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // var_dump(Patient::find($id));

        //
        return view('patients.edit')->withPatient(Patient::find($id));
     
    }



    public function profile($id)
    {
        // var_dump(Patient::find($id));
        //
        return view('patients.edit')->withPatient(Patient::find($id));
        // return view('patients.myhistory')->withPatient(Patient::find($id));
        // return view('patients.familyhistory')->withPatient(Patient::find($id));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update specific user

        $patient = Patient::find($id);
        //Save out the new Patient

        if (strlen($request->firstname) !== 0) {
            $patient->firstname = $request->firstname;
        }
        if (strlen($request->middle) !== 0) {
            $patient->middle = $request->middle;
        }
        if (strlen($request->lastname) !== 0) {
            $patient->lastname = $request->lastname;
        }
        if (strlen($request->address_1) !== 0) {
            $patient->address_1 = $request->address_1;
        }
        if (strlen($request->address_2) !== 0) {
            $patient->address_2 = $request->address_2;
        }
        if (strlen($request->streetnumber) !== 0) {
            $patient->steetnumber = $request->streetnumber;
        }
        if (strlen($request->city) !== 0) {
            $patient->city = $request->city;
        }
        if (strlen($request->state) !== 0) {
            $patient->state = $request->state;
        }
        if (strlen($request->postalcode) !== 0) {
            $patient->postalcode = $request->postalcode;
        }
      
        $patient->save();

        //Return the view

        // Future use    
        // return redirect()->action('PatientController@show', [$id]);
        // return redirect()->action('HomeController@index');
         return redirect()->action('PatientController@edit', [$id]);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
       
        // return redirect()->action('PatientController@show', [$id]);

    }
}  

