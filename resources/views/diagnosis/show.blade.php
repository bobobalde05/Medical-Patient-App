@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            {{ ucfirst($diagnosis->title) }}
                        </div>
                        <div>
                            @if($diagnosis->patientAppointment->prescription == null)
                            <a href="{{ route('prescription.create', $diagnosis->id) }}" class="btn-link">Add Prescription.</a>
                            @else
                                <a href="{{ route('prescription.show', $diagnosis->patientAppointment->prescription->id) }}" class="btn-link">View Prescription.</a>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-weight-bold">Date</span>
                                {{ $diagnosis->created_at }}
                            </li>
                            <li class="list-group-item">
                                <span class="font-weight-bold">Description? </span>
                                {{ $diagnosis->description  }}
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
