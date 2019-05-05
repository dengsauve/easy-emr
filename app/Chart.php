<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chart extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_id',
        'appointment_id',
        'chief_complaint',
        'illness_history',
        'physical_examination_notes',
        'systolic_reading',
        'diastolic_reading',
        'temperature',
        'weight',
        'assessment',
        'plan',
        'orders',
        'progress',
    ];

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
}
