@extends('layouts.app')

@section('content')


<div class="main-content">

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <div>
                            My Appointments
                        </div>
                        <div>
                            <a href="{{ route('patient.appointment.create') }}" class="btn-link">Schedule
                                Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 doctor-sidebar">

                    @if (! count($patientAppointments))
                    <div class="alert alert-danger text-center font-weight-bold">
                        No Record Found!
                    </div>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Complaint</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patientAppointments as $appointment)
                            <tr>
                                <td>{{ $appointment->complaint }}</td>
                                <td>{{ $appointment->appointment_date }} {{ $appointment->appointment_time }}</td>
                                <td>{{ $appointment->is_confirm }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>


@endsection