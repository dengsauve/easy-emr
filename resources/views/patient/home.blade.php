@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                        <p class="h4">Patients</p>
                        <hr/>
                        @foreach ($patients as $patient)
                            {{ $patient->first_name }}
                            {{ $patient->last_name }}
                            {{ $patient->phone_number }}
                            {{ $patient->birthday }}
                        @endforeach
                    </section>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
