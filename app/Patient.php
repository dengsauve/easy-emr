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
        'birthday',
        'gender',
        'ethnicity',
        'blood_type',
        'allergies',
        'diagnoses',
        'medical_history',
    ];

    /**
     * Get the appointments for the patient
     */
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    /**
     * Get the charts for this Patient
     */
    public function charts()
    {
        return $this->hasMany('App\Chart');
    }

    /**
     * Get the Patient's Full Name
     */
    public function name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get patient's ethnicity as defined in config/constants.php
     */
    public function getEthnicity()
    {
        $ethnicity_id = $this->ethnicity;
        return \Config::get('constants.ethnicities.' . $ethnicity_id);
    }

    /**
     * Get patient's ethnicity as defined in config/constants.php
     */
    public function getBloodType()
    {
        $blood_type_id = $this->blood_type;
        return \Config::get('constants.blood_type.' . $blood_type_id);
    }
}
