<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientAppointmentController;
use App\Http\Controllers\PrescriptionController;
use App\Models\Prescription;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(["middleware" => "auth"], function () {

    Route::prefix("doctor")->group( function () {

        Route::get('patient', [PatientController::class, 'index'])->name('patient.index');
        Route::get("patient/create", [PatientController::class, "create"])->name("patient.create");
        Route::post("patient", [PatientController::class, "store"])->name("patient.store");

        #Appointment
        Route::get('appointments', [AppointmentController::class, "index"])->name('appointment.index');
        Route::get('diagnosis/{patientAppointment}/create', [DiagnosisController::class, 'create'])->name('diagnosis.create');
        Route::post('diagnosis/{patientAppointment}', [DiagnosisController::class, 'store'])->name('diagnosis.store');
        Route::get('diagnosis/{diagnosis}/show', [DiagnosisController::class, 'show'])->name('diagnosis.show');
        Route::get('appointments/{appointment}/approve', [AppointmentController::class, "approve"])->name('appointment.approve');

        #prescription
        Route::get('prescription/{diagnosis}/create', [PrescriptionController::class, 'create'])->name('prescription.create');
        Route::post('prescription/{diagnosis}', [PrescriptionController::class, 'store'])->name('prescription.store');
        Route::get('prescription/{prescription}', [PrescriptionController::class, 'show'])->name('prescription.show');
    });

    Route::get("patient-appointment", [PatientAppointmentController::class, "index"])->name('patient.appointment.index');
    Route::get("patient-appointment/create", [PatientAppointmentController::class, "create"])->name('patient.appointment.create');
    Route::post("patient-appointment", [PatientAppointmentController::class, "store"])->name('patient.appointment.store');
    Route::get("patient-appointment/{patientAppointment}/", [PatientAppointmentController::class, "show"])->name('patient.appointment.show');

});
