@extends('layouts.app')

@section('form-title', 'Login')

@section('content')
    <div class="col-lg-4 mx-auto mt-5 pt-5 p-5 shadow border-radius">
        <div class="text-center mb-4">
            <img src="{{ url('/img/hki.png') }}"><br><br>
            <h2>Login</h2>
        </div>
        <form method="POST" class="col pt-3 login" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <div class="mx-auto">
                <div class="form-group mb-5">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required placeholder="Email" autofocus>
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group mb-5">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required placeholder="Password">
    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group text-center">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-login">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div><br>  
                <div class="text-center">
                        <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            </div>
        </form>
    </div>
@endsection
