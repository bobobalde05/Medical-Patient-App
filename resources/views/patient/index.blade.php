@extends('layouts.app')

@section('content')


<div class="main-content">

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <div>
                            My Patients List
                        </div>
                        <div>
                            <a href="{{ route('patient.create') }}" class="btn-link">Register Patient</a>
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

                    @if (! count($patients))
                    <div class="alert alert-danger text-center font-weight-bold">
                        No Record Found!
                    </div>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patients as $patient)
                            <tr>
                                <td>{{ $patient->name }}</td>
                                <td>View</td>
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