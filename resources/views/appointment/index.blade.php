@extends('layouts.app')

@section('content')


<div class="main-content">

    <div class="page-header">
       
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 doctor-sidebar">
                    @if (! count($appointments))
                    <div class="alert alert-danger text-center font-weight-bold">
                        No Record Found!
                    </div>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Complaint</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->patient->name }}</td>
                                <td>
                                    {{ $appointment->complaint }}

                                </td>
                                <td>{{ $appointment->appointment_date }} {{ $appointment->appointment_time }}</td>
                                <td>{{ $appointment->is_confirm }}</td>
                                <td>
                                    @if(!$appointment->status)
                                        <a href="{{ route('appointment.approve', $appointment) }}" class="btn btn-primary btn-sm">Approve</a>
                                    @elseif($appointment->diagnosis == null)
                                        <a href="{{ route('diagnosis.create', $appointment->id) }}" class="btn btn-danger btn-sm">
                                            add diagnosis
                                        </a>
                                    @else
                                        <a href="{{ route('diagnosis.show', $appointment->diagnosis->id) }}" class="btn btn-warning btn-sm">View Diagnosis</a>
                                    @endif
                                </td>
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