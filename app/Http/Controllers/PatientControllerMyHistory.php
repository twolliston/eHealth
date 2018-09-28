<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Brings in user model
use App\Patient;

class PatientControllerMyHistory extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('patients.myhistory.edit')->withPatient(Patient::find($id));
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