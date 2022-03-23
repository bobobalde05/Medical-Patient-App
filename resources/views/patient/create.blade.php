@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bolder">Patient Registration Form</div>

                <div class="card-body">
                    <form class="form-signin" method="POST" action="{{ route('patient.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>

                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Patient Email</label>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group text-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </div>

    <div class="account-box">
        <!-- Session Status -->



        <form class="form-signin" method="POST" action="{{ route('patient.store') }}">
           @csrf
           <div class="account-title">
               <h3>Patient Registration</h3>
           </div>
           <div class="form-group">
               <label>Name</label>
               <input id="name" type="text" name="name" class="form-control" required>
               
           @error('name')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
           </div>
           <div class="form-group">
               <label>Email</label>
               <input id="email" type="email" name="email" class="form-control"  required>
               @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
               @enderror
           </div>

           <div class="form-group text-center">
               <button class="btn btn-primary account-btn" type="submit">Register</button>
           </div>
           
       </form>
   </div>
</div>
@endsection