@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
        </div>
    </div>
</div>

@endsection