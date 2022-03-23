@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bolder">Add Diagnosis</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('diagnosis.store', $patientAppointment->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="complaint">Description</label>
                                <textarea  name="description" class="form-control  @error('description') is-invalid @enderror" id="description" rows="3"></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">
                                Schedule
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
