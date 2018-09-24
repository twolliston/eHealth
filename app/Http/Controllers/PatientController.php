<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Brings in user model
use App\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        // Get a user
        $patient = new Patient();
        $patient->user_id = Auth::loginUsingId();
        $patient->active = false;
        $patient->firstname = $request->firstname;
        $patient->middle = $request->middle;
        $patient->lastname = $request->lastname;
        $patient->address = $request->address;
        $patient->housenumber = $request->housenumber;
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
        if (strlen($request->address) !== 0) {
            $patient->address = $request->address;
        }
        if (strlen($request->housenumber) !== 0) {
            $patient->housenumber = $request->housenumber;
        }
      
        $patient->save();

        //Return the view

        return redirect()->action('PatientController@show', [$id]);
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
        $rsltDelRec = Patient::findOrFail($id);
        $rsltDelRec->destroy(); 

        $request->session()->flash('alert-success', 'Patient profile deleted successfully.');
        // return redirect()->route('admin.flags');
        return redirect()->action('PatientController@show', [$id]);

    }
}  

