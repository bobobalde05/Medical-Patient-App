@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            {{ ucfirst($prescription->drug_name) }}
                        </div>
                        <div>
                            <a href="{{ url()->previous() }}" class="btn-link">Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-weight-bold">Date</span>
                                {{ $prescription->created_at }}
                            </li>
                            <li class="list-group-item">
                                <span class="font-weight-bold">Usage? </span>
                                {{ $prescription->usage  }}
                            </li>
                            <li class="list-group-item">
                                <span class="font-weight-bold">Days Taken? </span>
                                {{ $prescription->no_of_days_to_be_taken  }}
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
