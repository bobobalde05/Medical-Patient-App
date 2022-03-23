@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bolder">Add Prescription</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('prescription.store', $diagnosis->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="drug-name">Drug Name</label>
                                <input type="text" class="form-control @error('drug_name') is-invalid @enderror" name="drug_name" id="drug-name">
                                @error('drug_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="usage">Usage</label>
                                <textarea  name="usage" class="form-control  @error('usage') is-invalid @enderror" id="usage" rows="3"></textarea>
                                @error('usage')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="no_of_days_to_be_taken">Total days Take</label>
                                <input type="number" class="form-control @error('no_of_days_to_be_taken') is-invalid @enderror" name="no_of_days_to_be_taken" id="no_of_days_to_be_taken">
                                @error('no_of_days_to_be_taken')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">
                                Add
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
