<?php

namespace App\Http\Requests;

use App\Helpers\Roles;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole(Roles::DOCTOR);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users','email')]
        ];
    }

    public function validate(): array
    {

        return $this->only([
            'name','email'
        ]);
    }

    public function getRandomPassword() {
        return Str::random(8);
    }
}
