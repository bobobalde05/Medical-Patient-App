<?php

namespace App\Http\Controllers;

use App\Helpers\Roles;
use App\Http\Requests\StoreDiagnosisRequest;
use App\Http\Requests\UpdateDiagnosisRequest;
use App\Models\Diagnosis;
use App\Models\PatientAppointment;
use App\Models\User;

class DiagnosisController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(PatientAppointment $patientAppointment)
    {
        $this->authorize('create', new Diagnosis());

        $patientAppointment->load('patient');

        return view('diagnosis.create', [
            'patientAppointment' => $patientAppointment
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiagnosisRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PatientAppointment $patientAppointment, StoreDiagnosisRequest $request)
    {
//        $this->authorize('view', $patientAppointment);

        $patientAppointment->load('patient');

        $patient = $patientAppointment->patient;

        $diagnosis = $patient->patientDiagnosis()
            ->create($request->validated() + ['patient_appointment_id' => $patientAppointment->id, 'doctor_id' => auth()->id()]);

        return redirect()->route('diagnosis.show', $diagnosis->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Diagnosis $diagnosis)
    {
        $diagnosis->load('patient', 'patientAppointment.prescription');

//        dd($diagnosis);

        return view('diagnosis.show', ['diagnosis' => $diagnosis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiagnosisRequest  $request
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiagnosisRequest $request, Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnosis $diagnosis)
    {
        //
    }
}
