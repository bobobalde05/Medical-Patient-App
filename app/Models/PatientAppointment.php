<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id', 'complaint', 'appointment_at','status'
    ];

    protected $dates = [
        'appointment_at'
    ];

    public function getAppointmentDateAttribute() {
        return $this->appointment_at->format('Y-m-d');
    }

    public function getAppointmentTimeAttribute() {
        return $this->appointment_at->format('H:i:s');
    }

    public function getIsConfirmAttribute(){
        if ($this->status) {
            return "Yes";
        }

        return "Pending";
    }

    public function patient() {
        return $this->belongsTo(User::class, "patient_id");
    }

    public function approve() {
        $this->update([
            'status' => !$this->status
        ]);
    }

    public function diagnosis() {
        return $this->hasOne(Diagnosis::class, 'patient_appointment_id');
    }

    public function doctor() {
        return$this->belongsTo(User::class, 'doctor_id');
    }

    public function prescription() {
        return $this->hasOne(Prescription::class, 'patient_appointment_id');
    }
}
