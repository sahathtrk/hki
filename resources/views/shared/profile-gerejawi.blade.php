@extends('template.main')

@section('title', 'Profile - Data Gerejawi')

@section('content')
    @include('includes.public.profile-nav')
    @if ($isEmpty)
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-gerejawi/add @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-gerejawi/add @elseif (auth()->user()->role == 'pelayan') /pelayan/profile/data-gerejawi/add @endif
"
            method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data[0]->id }}">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-center">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Gerejawi</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-15"><label class="labels">Tempat Baptis</label><input type="text"
                                        class="form-control" value="" name="tempat_baptis"></div><br>
                                <div class="col-md-15"><label class="labels">Tanggal Baptis</label><input type="date"
                                        class="form-control" value="" name="tanggal_baptis"></div><br>
                                <div class="col-md-15"><label class="labels">Tempat Sidhi</label><input type="text"
                                        class="form-control" value="" name="tempat_sidhi"></div><br>
                                <div class="col-md-15"><label class="labels">Tanggal Sidhi</label><input type="date"
                                        class="form-control" value="" name="tanggal_sidhi"></div><br>
                                <div class="col-md-15"><label class="labels">Tempat Menikah</label><input type="text"
                                        class="form-control" value="" name="tempat_menikah"></div><br>
                                <div class="col-md-15"><label class="labels">Tanggal Menikah</label><input type="date"
                                        class="form-control" value="" name="tanggal_menikah"></div><br>
                                <div class="col-md-15"><label class="labels">Tempat Menerima Tahbisan</label><input
                                        type="text" class="form-control" value="" name="tempat_tahbisan"></div><br>
                                <div class="col-md-15"><label class="labels">Tanggal Menerima
                                        Tahbisan</label><input type="date" class="form-control" value=""
                                        name="tanggal_tahbisan"></div><br>
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary profile-button" type="submit">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-gerejawi/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile /data-gereja wi/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'pelayan') /pelayan/profile/data-gerejawi/update/{{ $data[0]->id }} @endif
                "
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-5 border-center">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Gerejawi</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-15"><label class="labels">Tempat Baptis</label><input type="text"
                                        class="form-control" value="{{ $data[0]->tempat_baptis }}" name="tempat_baptis">
                                </div><br>
                                <div class="col-md-15"><label class="labels">Tanggal Baptis</label><input type="date"
                                        class="form-control" value="{{ $data[0]->tanggal_baptis }}" name="tanggal_baptis">
                                </div><br>
                                <div class="col-md-15"><label class="labels">Tempat Sidhi</label><input type="text"
                                        class="form-control" value="{{ $data[0]->tempat_sidhi }}" name="tempat_sidhi">
                                </div>
                                <br>
                                <div class="col-md-15"><label class="labels">Tanggal Sidhi</label><input type="date"
                                        class="form-control" value="{{ $data[0]->tanggal_sidhi }}" name="tanggal_sidhi">
                                </div><br>
                                <div class="col-md-15"><label class="labels">Tempat Menikah</label><input type="text"
                                        class="form-control" value="{{ $data[0]->tempat_menikah }}"
                                        name="tempat_menikah">
                                </div><br>
                                <div class="col-md-15"><label class="labels">Tanggal Menikah</label><input type="date"
                                        class="form-control" value="{{ $data[0]->tanggal_menikah }}"
                                        name="tanggal_menikah"></div><br>
                                <div class="col-md-15"><label class="labels">Tempat Menerima Tahbisan</label><input
                                        type="text" class="form-control" value="{{ $data[0]->tempat_tahbisan }}"
                                        name="tempat_tahbisan"></div>
                                <br>
                                <div class="col-md-15"><label class="labels">Tanggal Menerima
                                        Tahbisan</label><input type="date" class="form-control"
                                        value="{{ $data[0]->tanggal_tahbisan }}" name="tanggal_tahbisan"></div><br>
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary profile-button" type="submit">Simpan
                                        Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

@endsection
