<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'appointment_start_time',
        'appointment_duration',
        'patient_id',
        'user_id',
        'notes',
        'type',
    ];

    /**
     * Get the user that owns this appointment
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the patient for this appointment
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function getType()
    {
        $appointment_type_id = $this->type;
        return \Config::get('constants.appointment_type.' . $appointment_type_id);
    }
}
