<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
        'emergency_contact_name',
        'emergency_contact_phone_number',
        'birthday'
    ];

    /**
     * Get the appointments for the patient
     */
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
