<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Brings in user model
use App\Physician;

class PhysicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Get all the physicians
        $physicians = Physician::all();
        // var_dump(physicians);
        return view('physicians.index', compact('physicians'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('physicians.create');
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
        $physician = new Physician();
        $physician->user_id = Auth::loginUsingId();
        $physician->active = false;
        $physician->nickname = $request->nickname;
        $physician->firstname = $request->firstname;
        $physician->middle = $request->middle;
        $physician->lastname = $request->lastname;
        $physician->address_1 = $request->address_1;
        $physician->address_2 = $request->address_2;
        $physician->housenumber = $request->housenumber;
        $physician->postalcode = $request->postalcode;
        $physician->city = $request->city;
        $physician->state = $request->state;
        $physician->county = $request->county;
        $physician->phonenumber = $request->phonenumber;
        $physician->mobilenumber = $request->mobilenumber;
        $physician->email = $request->email;
        $physician->created_at = $request->created_at;
        $physician->updated_at = $request->updated_at;

        $physician->save();
        return redirect()->back();
        // var_dump($physician);
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
       return view('physicians.show')->withPhysician(Physician::find($id));
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
         // var_dump(Physician::find($id));

        //
        return view('physicians.edit')->withPhysician(Physician::find($id));
     
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

       $physician = Physician::find($id);
       //Save out the new Physician

       if (strlen($request->nickname) !== 0) {
        $physician->nickname = $request->nickname;
       }
       if (strlen($request->firstname) !== 0) {
        $physician->firstname = $request->firstname;
       }
       if (strlen($request->middle) !== 0) {
        $physician->middle = $request->middle;
       }
       if (strlen($request->lastname) !== 0) {
        $physician->lastname = $request->lastname;
       }
       if (strlen($request->address_1) !== 0) {
        $physician->address_1 = $request->address_1;
       }
       if (strlen($request->address_2) !== 0) {
        $physician->address_2 = $request->address_2;
       }
       if (strlen($request->housenumber) !== 0) {
        $physician->housenumber = $request->housenumber;
       }
       if (strlen($request->city) !== 0) {
        $physician->city = $request->city;
       }
       if (strlen($request->state) !== 0) {
        $physician->state = $request->state;
       }
       if (strlen($request->postalcode) !== 0) {
        $physician->postalcode = $request->postalcode;
       }
     
       // $patient->save();

       //Return the view

       // return redirect()->action('PatientController@show', [$id]);
        return redirect()->action('HomeController@index');
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
    }
}
