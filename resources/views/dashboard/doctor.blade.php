@extends('layouts.app')

@section('content')



<div class="main-content">

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">

                        <p>Welcome {{ auth()->user()->name }} to your dashboard!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 doctor-sidebar">
                    <div class="doctor-list doctor-view">
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection