<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = ['drug_name', 'usage', 'no_of_days_to_be_taken', 'patient_appointment_id'];


    public function patientAppointment() {
        return $this->belongsTo(PatientAppointment::class, 'patient_appointment_id');
    }

}
