<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointment extends FormRequest
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
            'appointment_start_time' => 'required|date',
            'appointment_duration' => 'required|integer',
            'patient_id' => 'required|exists:patients,id',
            'user_id' => 'required|exists:users,id',
            'notes' => 'required',
        ];
    }
}
