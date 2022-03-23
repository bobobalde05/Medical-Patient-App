@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bolder">Patient Registration Form</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('patient.appointment.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="complaint">Complaint</label>
                                <textarea  name="complaint" class="form-control  @error('complaint') is-invalid @enderror" id="complaint" rows="3"></textarea>
                                @error('complaint')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="appointment_at">Address 2</label>
                                <input type="datetime-local" class="form-control" id="appointment_at" name="appointment_at">
                            </div>


                            <button type="submit" class="btn btn-primary mt-3">
                                Schedule
                            </button>

                        </form>
                    </div>
                </div>
            </div> -->
    </div>
</div>

<div class="account-box">
    <!-- Session Status -->

    <form method="POST" action="{{ route('patient.appointment.store') }}">
        @csrf
        <div class="account-title">
            <h3>Patient Registration Form</h3>
        </div>
        <div class="form-group">
            <label for="complaint">Complaint</label>
            <textarea name="complaint" class="form-control  @error('complaint') is-invalid @enderror" id="complaint"
                rows="3"></textarea>
            @error('complaint')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="appointment_at">Time and Date</label>
            <input type="datetime-local" class="form-control" id="appointment_at" name="appointment_at">
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary account-btn" type="submit">Schedule</button>
        </div>

    </form>
</div>
</div>
@endsection