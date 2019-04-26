@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $patient->last_name . ', ' . $patient->first_name }}
                </div>

                <div class="card-body">
                    <dl class='dl-horizontal'>
                        <dt>
                            Last Name
                        </dt>
                        <dd>
                            {{ $patient->last_name }}
                        </dd>
                        <dt>
                            First Name
                        </dt>
                        <dd>
                            {{ $patient->first_name }}
                        </dd>
                        <dt>
                            Middle Name
                        </dt>
                        <dd>
                            {{ $patient->middle_name }}
                        </dd>
                        <dt>
                            Email Address
                        </dt>
                        <dd>
                            {{ $patient->email }}
                        </dd>
                        <dt>
                            Phone Number
                        </dt>
                        <dd>
                            {{ $patient->phone_number }}
                        </dd>
                        <dt>
                            Birthday
                        </dt>
                        <dd>
                            {{ $patient->birthday }}
                        </dd>
                        <dt>
                            Gender
                        </dt>
                        <dd>
                            {{ $patient->gender }}
                        </dd>
                        <dt>
                            Ethnicity
                        </dt>
                        <dd>
                            {{ $patient->getEthnicity() }}
                        </dd>
                        
                        <dt>
                            Allergies
                        </dt>
                        <dd>
                            {{ $patient->gender }}
                        </dd>
                        <dt>
                            Diagnoses
                        </dt>
                        <dd>
                            {{ $patient->diagnoses }}
                        </dd>
                        <dt>
                            Medical History
                        </dt>
                        <dd>
                            {{ $patient->medical_history }}
                        </dd>
                    </dl>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection