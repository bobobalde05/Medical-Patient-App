

@extends('layouts.guest')
@section('content')
    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                     <!-- Session Status -->
        

      
                    <form class="form-signin" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="account-title">
                            <h3>Login</h3>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" autofocus>
                            
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"  required>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Login</button>
                        </div>
                        
                        <div class="text-center register-link">
                            @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection