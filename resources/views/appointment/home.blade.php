@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Appointment Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section>
                        <div class="row justify-content-between">
                            <div class="col-sm-8 col-md-6 col-lg-4">
                                <span class="h4">Upcoming Appointments</span>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-4 text-right">
                                <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                                    Create Appointment
                                </a>
                            </div>
                        </div>
                        <hr/>

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Patient Name</th>
                                    <th>User Name</th>
                                    <th>Appointment Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>
                                            {{ $appointment->patient->name() }}
                                        </td>
                                        <td>
                                            {{ $appointment->user->name}}
                                        </td>
                                        <td>
                                            {{ $appointment->appointment_start_time }}
                                        </td>
                                        <td>
                                            <a href="{{ route('appointments.show', ['appointment' => $appointment]) }}">
                                                show
                                            </a>
                                            <a href="{{ route('appointments.edit', ['appointment' => $appointment]) }}">
                                                edit
                                            </a>
                                            <form action="{{ route('appointments.destroy', ['appointment' => $appointment]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" value="delete" class="btn btn-danger btn-sm" />
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </section>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
