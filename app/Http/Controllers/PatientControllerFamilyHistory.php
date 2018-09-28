<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Brings in user model
use App\Patient;

class PatientControllerFamilyHistory extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('patients.familyhistory.edit')->withPatient(Patient::find($id));
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

         // send message
       $successmessage = 'Update successful';
       $request->session()->flash('success', $successmessage);

        //  update specific user
        $patient = Patient::find($id);
        // //Save out the new Patient
        
        // Do not implode when array is empty 
        if (empty($request->family_history)) {
            $patient->family_history = $request->family_history;
            
        } else { 
            $patient->family_history = implode(",", $request->family_history);
        }

        $patient->save();

        //Return the view
        // return redirect()->action('PatientControllerFamilyHistory@edit', [$id]); 
        // return redirect()->action('PatientController@show', [$id]);
         return redirect()->action('HomeController@index');
    }


} 