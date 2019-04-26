<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: Figure out authorization rules after roles have been created
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
            'first_name' => 'required|alpha',
            'middle_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'phone_number' => 'required',
            'emergency_contact_name' => 'required',
            'emergency_contact_phone_number' => 'required',
            'birthday' => 'required|date',
            'gender' => 'required|boolean',
            'allergies' => 'required',
            'diagnoses' => 'required',
            'medical_history' => 'required'
        ];
    }
}
