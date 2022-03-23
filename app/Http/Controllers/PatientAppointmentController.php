<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientAppointmentRequest;
use App\Http\Requests\UpdatePatientAppointmentRequest;
use App\Models\PatientAppointment;
use Illuminate\Contracts\Foundation\Application;

class PatientAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view("patient-appointment.index", [
            "patientAppointments" => $this->user()->scheduleAppointments()->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view("patient-appointment.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientAppointmentRequest $request)
    {
        $patientAppointment = $this->user()->scheduleAppointments()->create($request->validate() + [
                'doctor_id' => $this->user()->doctor()->first()->id
            ]);

        //Todo Notify doctor about appointment via remail

        return redirect()->route('patient.appointment.show', $patientAppointment->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(PatientAppointment $patientAppointment)
    {
        return view('patient-appointment.show', ['appointment' => $patientAppointment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientAppointment $patientAppointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientAppointmentRequest  $request
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientAppointmentRequest $request, PatientAppointment $patientAppointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientAppointment  $patientAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientAppointment $patientAppointment)
    {
        //
    }
}
