@extends('template.main')

@section('title', 'Profile - Data Pendidikan Informal')

@section('content')
    @include('includes.public.profile-nav')
    @if ($isEmpty)
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-informal/add @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-informal/add @elseif (auth()->user()->role == 'pelayan') /pelayan/profile/data-informal/add @endif
        "
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Pendidikan Informal</h4>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Jenis Pendidikan Informal</label><input
                                        type="text" class="form-control" value="" name="jenis_pendidikan">
                                    @error('jenis_pendidikan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tanggal Kegiatan/Program</label><input
                                        type="date" class="form-control" value="" name="tanggal_pendidikan">
                                    @error('tanggal_pendidikan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tempat Kegiatan/Program</label><input
                                        type="text" class="form-control" value="" name="tempat">
                                    @error('tempat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="submit">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-informal/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-informal/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'pelayan') /pelayan/profile/data-informal/update/{{ $data[0]->id }} @endif
    "
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $data[0]->id }}">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Pendidikan Informal</h4>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Jenis Pendidikan Informal</label><input
                                        type="text" class="form-control" value="{{ $data[0]->jenis_pendidikan }}"
                                        name="jenis_pendidikan">
                                    @error('jenis_pendidikan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tanggal Kegiatan/Program</label><input
                                        type="date" class="form-control" value="{{ $data[0]->tanggal_pendidikan }}"
                                        name="tanggal_pendidikan">
                                    @error('tanggal_pendidikan')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tempat Kegiatan/Program</label><input
                                        type="text" class="form-control" value="{{ $data[0]->tempat }}" name="tempat">
                                    @error('tempat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="submit">Simpan
                                    Perubahan</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

@endsection
