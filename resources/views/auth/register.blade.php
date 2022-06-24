@extends('layouts.app')

@section('form-title', 'Registrasi')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('nama') }}" required autocomplete="name" autofocus>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ttl"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tempat, Tanggal Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="ttl" type="text" class="form-control @error('ttl') is-invalid @enderror"
                                        name="ttl" value="{{ old('ttl') }}" required autocomplete="ttl" autofocus>

                                    @error('ttl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ old('alamat') }}" required autocomplete="name" autofocus>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hp"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nomor HP') }}</label>

                                <div class="col-md-6">
                                    <input id="hp" type="text" class="form-control @error('hp') is-invalid @enderror"
                                        name="hp" value="{{ old('hp') }}" required autocomplete="hp" autofocus>

                                    @error('hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('level') ? 'has-error' : null }}">
                                <label for="level"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                                <div class="col-md-6">
                                    <select name="" id="" class="form-control">
                                        <option value="" hidden selected>--Pilih Level--</option>
                                        <option value="pimpinan">Pucuk Pimpanan</option>
                                        <option value="kadep">Kepala Departemen</option>
                                        <option value="pelayan">Pelayan Penuh Waktu</option>
                                    </select>

                                    @error('level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
