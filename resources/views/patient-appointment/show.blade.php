@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            {{ ucfirst($appointment->complaint) }}
                        </div>
                        <div>
                            <a href="{{ route("patient.appointment.index") }}" class="btn-link">Appointments</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-weight-bold">Date</span>
                                {{ $appointment->appointment_date }}
                            </li>
                            <li class="list-group-item"><span class="font-weight-bold">Time</span>
                                {{ $appointment->appointment_time }}
                            </li>
                            <li class="list-group-item">
                                <span class="font-weight-bold">isConfirm? </span>
                                {{ $appointment->is_confirm  }}
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
