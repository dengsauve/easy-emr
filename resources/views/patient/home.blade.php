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
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>
                                            <a href="{{ route('patients.show', ['patient' => $patient]) }}">
                                                {{ $patient->last_name . ', ' . $patient->first_name }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('patients.edit', ['patient' => $patient]) }}">
                                                edit
                                            </a>
                                            <a href="{{ route('patients.destroy', ['patient' => $patient]) }}">
                                                delete
                                            </a>
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
