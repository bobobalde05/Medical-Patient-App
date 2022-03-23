<?php

namespace App\Http\Requests;

use App\Helpers\Roles;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePatientAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole(Roles::PATIENT);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'complaint' => ['required'],
            'appointment_at' => ['bail', 'required', 'date', 'after:today'],
        ];
    }

    public function validate() {
        return $this->only( 'complaint', 'appointment_at');
    }

}
