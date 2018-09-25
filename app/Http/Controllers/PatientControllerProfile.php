<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Brings in user model
use App\Patient;

class PatientControllerProfile extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('patients.profile.edit')->withPatient(Patient::find($id));
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
        //  update specific user

        $patient = Patient::find($id);
        // //Save out the new Patient

        // $check = new checkbox;
        // $check->cat_1 = "my_history";
        // $check->my_history = implode(",", $request->my_history);

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
        if (strlen($request->housenumber) !== 0) {
            $patient->housenumber = $request->housenumber;
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
        if (strlen($request->county) !== 0) {
            $patient->county = $request->county;
        }

        if (empty($request->my_history)) {
            $patient->my_history = $request->my_history;
            
        } else { 
            $patient->my_history = implode(",", $request->my_history);
        }

         // todo Do not implode when array is empty   

        // $patient->my_history = implode(",", $request->my_history);
        // $patient->my_history = $request->my_history;

        $patient->save();

        //Return the view

        // return redirect()->action('PatientController@show', [$id]);
         return redirect()->action('HomeController@index');
    }


} 