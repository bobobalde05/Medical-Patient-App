<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrescriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'drug_name' => ['required'],
            'usage' => ['required'],
            'no_of_days_to_be_taken' => ['required'],
        ];
    }

    public function validate(): array
    {
        return $this->only(['drug_name', 'usage', 'no_of_days_to_be_taken']);
    }
}
