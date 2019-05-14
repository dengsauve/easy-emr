@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">
                    {{ $appointment->patient->name() . ' with ' . $appointment->user->name }}
                </div>

                <div class="card-body">
                    <dl class='dl-horizontal'>
                        <dt>
                            Appointment Type
                        </dt>
                        <dd>
                            {{ $appointment->getType() }}
                        <dt>
                            Date and Time
                        </dt>
                        <dd>
                            {{ $appointment->appointment_start_time }}
                        </dd>
                        <dt>
                            Duration
                        </dt>
                        <dd>
                            {{ $appointment->appointment_duration }} minutes
                        </dd>
                        <dt>
                            Notes
                        </dt>
                        <dd>
                            {{ $appointment->notes }}
                        </dd>
                    </dl>
                </div>

            </div>

            <div class='card'>
            
                <div class='card-header'>
                    Charts
                </div>
            
                <div class='card-body'>
                    <a href="/charts/create?patient_id={{ $appointment->patient->id }}&appointment_id={{ $appointment->id }}" 
                        class="btn btn-primary">
                        Create new chart for appointment
                    </a>
                </div>
            
            </div>

        </div>
    </div>
</div>

@endsection