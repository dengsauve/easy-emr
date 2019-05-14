@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <div class='card'>
            
                <div class='card-header'>
                    Chart for {{ $patient->name() }}
                </div>
            
                <div class='card-body'>
                    <form action="/charts" method="post">
                        @csrf

                        <input type="hidden" name="patient_id" value="{{ $patient->id }}" />
                        <input type="hidden" name="appointment_id" value="{{ $appointment->id }}" />
                        
                        <div class="row">
                            
                            <div class="col-12">
                                <p class="h3">
                                    Vitals
                                </p>
                                <hr/>
                            </div>

                            <div class='form-group col-md-3'>
                                <label for='systolic_reading'>Systolic Pressure</label>
                                <input 
                                    type='number' 
                                    class='form-control' 
                                    name='systolic_reading' 
                                    value="{{ old('systolic_reading') }}"
                                    min="1"
                                    max="300"
                                    />
                            </div>
                            
                            <div class='form-group col-md-3'>
                                <label for='diastolic_reading'>Diastolic Pressure</label>
                                <input 
                                    type='number' 
                                    class='form-control' 
                                    name='diastolic_reading' 
                                    value="{{ old('diastolic_reading') }}"
                                    min="1"
                                    max="300"
                                    />
                            </div>
                            
                            <div class='form-group col-md-3'>
                                <label for='temperature'>Temperature</label>
                                <input 
                                    type='number' 
                                    class='form-control' 
                                    name='temperature' 
                                    value="{{ old('temperature') }}"
                                    min="70"
                                    max="120"
                                    step=".1"
                                    />
                            </div>
                            
                            <div class='form-group col-md-3'>
                                <label for='weight'>Weight</label>
                                <input 
                                    type='number' 
                                    class='form-control' 
                                    name='weight' 
                                    value="{{ old('weight') }}"
                                    step="any"
                                    />
                            </div>
                        </div>

                        <div>
                            <br/>
                            <p class="h3">
                                Visit Information
                            </p>
                            <hr/>
                        </div>

                        <div class='form-group'>
                            <label for='chief_complaint'>Chief Complaint</label>
                            <input type='text' class='form-control' name='chief_complaint' value="{{ old('chief_complaint') }}"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="illness_history">Illness History</label>
                            <textarea class="form-control" name="illness_history" rows="3">
                        {{ old('illness_history') }}
                            </textarea>
                        </div>

                        <div class='form-group'>
                            <label for='physical_examination_notes'>Physical Examination Notes</label>
                            <textarea class='form-control' name='physical_examination_notes' rows='3'>
                        {{ old('physical_examination_notes') }}
                            </textarea>
                        </div>

                        <div class='form-group'>
                            <label for='assessment'>Assessment</label>
                            <textarea class='form-control' name='assessment' rows='3'>
                        {{ old('assessment') }}
                            </textarea>
                        </div>
                        
                        <div class='form-group'>
                            <label for='plan'>Plan</label>
                            <textarea class='form-control' name='plan' rows='3'>
                        {{ old('plan') }}
                            </textarea>
                        </div>
                        
                        <div class='form-group'>
                            <label for='orders'>Orders & Prescriptions</label>
                            <textarea class='form-control' name='orders' rows='3'>
                        {{ old('orders') }}
                            </textarea>
                        </div>
                        
                        <div class='form-group'>
                            <label for='progress'>Progress</label>
                            <textarea class='form-control' name='progress' rows='3'>
                        {{ old('progress') }}
                            </textarea>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Create Chart" />
                        
                    </form>
                </div>
            
            </div>

        </div>
    </div>
</div>

@endsection