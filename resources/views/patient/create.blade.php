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
                    Patients Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section>
                        <p class="h4">New Patient</p>
                        <hr/>
                        <form method='POST' action='/patients'>
                            @csrf
                            
                            <div class="row">
                                <div class='form-group col-lg-4'>
                                    <label for='first_name'>first name</label>
                                    <input type='text' class='form-control' name='first_name' />
                                </div>

                                <div class='form-group col-lg-4'>
                                    <label for=''>middle name</label>
                                    <input type='text' class='form-control' name='middle_name' />
                                </div>

                                <div class='form-group col-lg-4'>
                                    <label for='last_name'>last name</label>
                                    <input type='text' class='form-control' name='last_name' />
                                </div>
                            </div>

                            <div class='row'>
                                <div class='form-group col-lg-6'>
                                    <label for='email'>email address</label>
                                    <input type='email' class='form-control' name='email' />
                                </div>

                                <div class='form-group col-lg-6'>
                                    <label for='phone_number'>phone number</label>
                                    <input type='tel' class='form-control' name='phone_number' />
                                </div>
                            </div>

                            <div class='row'>
                                <div class='form-group col-lg-6'>
                                    <label for='emergency_contact_name'>emergency contact name</label>
                                    <input type='text' class='form-control' name='emergency_contact_name' />
                                </div>

                                <div class='form-group col-lg-6'>
                                    <label for='emergency_contact_phone_number'>emergency contact phone number</label>
                                    <input type='tel' class='form-control' name='emergency_contact_phone_number' />
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <label for='birthday'>birthday</label>
                                <input type='date' class='form-control' name='birthday' />
                            </div>

                            <input type='submit' class='form-control' />

                        </form>
                    </section>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
