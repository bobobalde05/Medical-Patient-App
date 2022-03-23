<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','patient_id', 'patient_appointment_id', 'doctor_id'];

    public function patient() {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function patientAppointment() {
        return $this->belongsTo(PatientAppointment::class, 'patient_appointment_id');
    }

    public function doctor() {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
