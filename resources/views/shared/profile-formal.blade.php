@extends('template.main')

@section('title', 'Profile - Data Pendiikan Formal')

@section('content')
    @include('includes.public.profile-nav')
    @if ($isEmpty)
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-formal/add @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-formal/add @elseif (auth()->user()->role == 'pelayan') /pelayan/profile/data-formal/add @endif
"
            method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data[0]->id }}">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Pendidikan Formal</h4>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Sekolah Dasar</label><input type="text"
                                        class="form-control" name="nama_sd">
                                    @error('nama_sd')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Masuk</label><input type="number"
                                        class="form-control" name="masuk_sd">
                                    @error('masuk_sd')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Selesai</label><input type="number"
                                        class="form-control" name="selesai_sd">
                                    @error('selesai_sd')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Sekolah Menengah Pertama</label><input
                                        type="text" class="form-control" name="nama_smp">
                                    @error('nama_smp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Masuk</label><input type="number"
                                        class="form-control" name="masuk_smp">
                                    @error('masuk_smp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Selesai</label><input type="number"
                                        class="form-control" name="selesai_smp">
                                    @error('selesai_smp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Sekolah Menengah Atas</label><input
                                        type="text" class="form-control" name="nama_sma">
                                    @error('nama_sma')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Masuk</label><input type="number"
                                        class="form-control" name="masuk_sma">
                                    @error('masuk_sma')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Selesai</label><input type="number"
                                        class="form-control" name="selesai_sma">
                                    @error('selesai_sma')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Simpan Perubahan</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    @else
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-formal/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-formal/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'pelayan') /pelayan/profile/data-formal/update/{{ $data[0]->id }} @endif
    "
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Pendidikan Formal</h4>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Sekolah Dasar</label><input type="text"
                                        class="form-control" value="{{ $data[0]->nama_sd }}" name="nama_sd">
                                    @error('nama_sd')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Masuk</label><input type="number"
                                        class="form-control" value="{{ $data[0]->masuk_sd }}" name="masuk_sd">
                                    @error('masuk_sd')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Selesai</label><input type="number"
                                        class="form-control" value="{{ $data[0]->selesai_sd }}" name="selesai_sd">
                                    @error('selesai_sd')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Sekolah Menengah Pertama</label><input
                                        type="text" class="form-control" value="{{ $data[0]->nama_smp }}"
                                        name="nama_smp">
                                    @error('nama_smp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Masuk</label><input type="number"
                                        class="form-control" value="{{ $data[0]->masuk_smp }}" name="masuk_smp">
                                    @error('masuk_smp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Selesai</label><input type="number"
                                        class="form-control" value="{{ $data[0]->selesai_smp }}" name="selesai_smp">
                                    @error('selesai_smp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-15"><label class="labels">Sekolah Menengah Atas</label><input
                                        type="text" class="form-control" value="{{ $data[0]->nama_sma }}"
                                        name="nama_sma">
                                    @error('nama_sma')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Masuk</label><input type="number"
                                        class="form-control" value="{{ $data[0]->masuk_sma }}" name="masuk_sma">
                                    @error('masuk_sma')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-15"><label class="labels">Tahun Selesai</label><input type="number"
                                        class="form-control" value="{{ $data[0]->selesai_sma }}" name="selesai_sma">
                                    @error('selesai_sma')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Simpan Perubahan</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    @endif

@endsection
