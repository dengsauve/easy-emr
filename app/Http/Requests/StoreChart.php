<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChart extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: Auth logic
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
            'patient_id' => 'required|exists:patients,id',
            'appointment_id' => 'required|exists:appointments,id',
            'chief_complaint' => 'required',
            'illness_history' => 'required',
            'physical_examination_notes' => 'required',
            'systolic_reading' => 'required|integer',
            'diastolic_reading' => 'required|integer',
            'temperature' => 'required|numeric',
            'weight' => 'required|numeric',
            'assessment' => 'required',
            'plan' => 'required',
            'orders' => 'required',
        ];
    }
}
