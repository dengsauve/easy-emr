<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\StorePatient;

class PatientController extends Controller
{
    // Any user seeing Patients needs to be authorized
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.home', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ethnicities = \Config::get('constants.ethnicities');
        $blood_types = \Config::get('constants.blood_types');
        return view('patient.create', 
            [
                'ethnicities' => $ethnicities,
                'blood_types' => $blood_types,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *          \App\Http\Requests\StorePatient
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatient $request)
    {
        $patient = Patient::create( $request->all() );

        return redirect()->route('patients.show', $patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $ethnicities = \Config::get('constants.ethnicities');
        $blood_types = \Config::get('constants.blood_types');
        return view('patient.edit',
            [
                'patient' => $patient,
                'ethnicities' => $ethnicities,
                'blood_types' => $blood_types,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(StorePatient $request, Patient $patient)
    {
        $patient->fill($request->all());
        $patient->save();

        return redirect()->route('patients.show', $patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index');
    }
}
