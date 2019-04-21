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
    ];
}
