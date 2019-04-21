@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="help-text">Welcome {{ Auth::user()->name }}</p>

                    <section>
                        <a href="{{ route('patients.index') }}">
                            Patients
                        </a>
                        
                    </section>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
