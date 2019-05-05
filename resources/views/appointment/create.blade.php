@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
    <!-- Display any flashed errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- End Errors-->
    
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
                        <p class="h4">New Appointment</p>
                        <hr/>
                        <form method='POST' action='/appointments'>
                            @csrf
                            
                            <div class="row">

                                <div class='form-group col-lg-6'>
                                    <label for='appointment_start_time'>Date / Time</label>
                                    <input type='datetime-local' class='form-control' name='appointment_start_time' value="{{ old('appointment_start_time') }}"/>
                                </div>
                                
                                <div class='form-group col-lg-6'>
                                    <label for='appointment_duration'>Duration (minutes)</label>
                                    <input type='number' min="1" class='form-control' name='appointment_duration' value="{{ old('appointment_duration') }}"/>
                                </div>
                                
                            </div>

                            <div class='row'>
                                <div class="form-group col-lg-6">
                                    <label for="patient_id">Patient Name</label>
                                    <select class="form-control" name="patient_id">
                                        <option hidden disabled selected> -- select a patient -- </option>
                                        @foreach( $patients as $patient )
                                            <option value='{{ $patient->id }}'>{{ $patient->name() }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="user_id">User Name</label>
                                    <select class="form-control" name="user_id">
                                        <option hidden disabled selected> -- select an user -- </option>
                                        @foreach( $users as $user )
                                            <option value='{{ $user->id }}'>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class='row'>

                                <div class='form-group col-12'>
                                    <label for='type'>Appointment Type</label>
                                    <select class='form-control' name='type'>
                                        <option hidden disabled selected> -- select a type -- </option>
                                        @foreach( $types as $key => $type)
                                        <option value="{{ $key }}">{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class='form-group col-12'>
                                    <label for='notes'>Notes</label>
                                    <textarea class='form-control' name='notes'>
                                        {{ old('notes') }}
                                    </textarea>
                                </div>
                            </div>

                            <input type='submit' class='form-control btn btn-primary' />

                        </form>
                    </section>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
