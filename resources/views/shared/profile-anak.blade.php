@extends('template.main')

@section('title', 'Profile - Data Anak')

@section('content')
    @include('includes.public.profile-nav')
    @if ($isEmpty)
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-anak/add @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-anak/add @elseif (auth()->user()->role == 'pelayan')/pelayan/profile/data-anak/add @endif
    "
            method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                class="rounded-circle mt-5" width="150px"
                                src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            <input type="file" name="img_user" id="" value="">
                            @error('img_user')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Anak</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Nama Lengkap</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap" value=""
                                        name="nama_anak">
                                    @error('nama_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">NIK</label><input type="text"
                                        class="form-control" placeholder="Masukkan NIK sesuai pada KTP" value=""
                                        name="nik_anak">
                                    @error('nik_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="lakilaki" value="Laki-laki"
                                            name="gender_anak">
                                        @error('gender_anak')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="lakilaki">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="perempuan" value="Perempuan"
                                            name="gender_anak">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ibu</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ibu" value=""
                                        name="nama_ibu_anak">
                                    @error('nama_ibu_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ayah</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ayah" value=""
                                        name="nama_ayah_anak">
                                    @error('nama_ayah_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Tinggi Badan (cm)</label><input type="text"
                                        class="form-control" placeholder="Masukkan tinggi badan" value=""
                                        name="tinggi_anak">
                                    @error('tinggi_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Berat Badan (kg)</label><input type="text"
                                        class="form-control" placeholder="Masukkan berat badan" value=""
                                        name="berat_anak">
                                    @error('berat_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels" name="golongan_darah">Golongan Darah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="A"
                                            name="golongan_darah_anak">
                                        @error('golongan_darah_anak')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio1" name="">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah_anak"
                                            id="inlineRadio2" value="B">
                                        @error('golongan_darah')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio2">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah_anak"
                                            id="inlineRadio2" value="O">
                                        <label class="form-check-label" for="inlineRadio2">O</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah_anak"
                                            id="inlineRadio2" value="AB">
                                        <label class="form-check-label" for="inlineRadio2">AB</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Hobby</label><input type="text"
                                        class="form-control" placeholder="Masukkan hobby" value=""
                                        name="hobby_anak">
                                    @error('hobby_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="submit">Simpan
                                    Perubahan</button></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience">Kontak Pribadi</div>
                            <br>
                            <div class="col-md-12"><label class="labels">HP (Whatsapp)</label><input type="text"
                                    class="form-control" placeholder="Masukkan nomor HP" value=""
                                    name="no_hp_anak">
                                @error('no_hp_anak')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div> <br>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="Masukkan email" value=""
                                    name="email_anak">
                                @error('email_anak')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div><br>
                            <div class="col-md-12"><label class="labels">Akun Media Sosial</label><input type="text"
                                    class="form-control" placeholder="Masukkan akun media sosial (jika ada)"
                                    value="" name="sosial_media_anak">
                                @error('sosial_media_anak')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @else
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-anak/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-anak/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'pelayan')/pelayan/profile/data-anak/update/{{ $data[0]->id }} @endif
"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $data[0]->id }}">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                        class="rounded-circle mt-5" width="150px" height="150px"
                        src="{{asset('img/profile')}}/{{$data[0]->img_user}}">
                        <input type="file" name="img_user" id="" value="">
                            @error('img_user')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Anak</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Nama Lengkap</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap" value="{{$data[0]->nama_anak}}"
                                        name="nama_anak">
                                    @error('nama_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">NIK</label><input type="text"
                                        class="form-control" placeholder="Masukkan NIK sesuai pada KTP" value="{{$data[0]->nik_anak}}"
                                        name="nik_anak">
                                    @error('nik_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="lakilaki" value="Laki-laki" @if ($data[0] -> gender_anak == 'Laki-laki') checked @endif
                                            name="gender_anak">
                                        @error('gender_anak')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="lakilaki">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="perempuan" value="Perempuan" @if ($data[0] -> gender_anak == 'Perempuan') checked @endif
                                            name="gender_anak">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ibu</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ibu" value="{{$data[0]->nama_ibu_anak}}"
                                        name="nama_ibu_anak">
                                    @error('nama_ibu_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ayah</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ayah" value="{{$data[0]->nama_ayah_anak}}"
                                        name="nama_ayah_anak">
                                    @error('nama_ayah_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Tinggi Badan (cm)</label><input
                                        type="text" class="form-control" placeholder="Masukkan tinggi badan"
                                        value="{{$data[0]->tinggi_anak}}" name="tinggi_anak">
                                    @error('tinggi_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Berat Badan (kg)</label><input type="text"
                                        class="form-control" placeholder="Masukkan berat badan" value="{{$data[0]->berat_anak}}"
                                        name="berat_anak">
                                    @error('berat_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels" name="golongan_darah">Golongan Darah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="A" @if ($data[0] -> golongan_darah_anak == 'A') checked @endif
                                            name="golongan_darah_anak">
                                        @error('golongan_darah_anak')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio1" name="">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah_anak"
                                            id="inlineRadio2" value="B" @if ($data[0] -> golongan_darah_anak == 'B') checked @endif>
                                        @error('golongan_darah_anak')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio2">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah_anak"
                                            id="inlineRadio2" value="O" @if ($data[0] -> golongan_darah_anak == 'O') checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">O</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah_anak"
                                            id="inlineRadio2" value="AB" @if ($data[0] -> golongan_darah_anak == 'AB') checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">AB</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Hobby</label><input type="text"
                                        class="form-control" placeholder="Masukkan hobby" value="{{$data[0]->hobby_anak}}"
                                        name="hobby_anak">
                                    @error('hobby_anak')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="submit">Simpan
                                    Perubahan</button></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience">Kontak Pribadi</div>
                            <br>
                            <div class="col-md-12"><label class="labels">HP (Whatsapp)</label><input type="text"
                                    class="form-control" placeholder="Masukkan nomor HP" value="{{$data[0]->no_hp_anak}}"
                                    name="no_hp_anak">
                                @error('no_hp_anak')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div> <br>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="Masukkan email" value="{{$data[0]->email_anak}}"
                                    name="email_anak">
                                @error('email_anak')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div><br>
                            <div class="col-md-12"><label class="labels">Akun Media Sosial</label><input type="text"
                                    class="form-control" placeholder="Masukkan akun media sosial (jika ada)"
                                    value="{{$data[0]->sosial_media_anak}}" name="sosial_media_anak">
                                @error('sosial_media_anak')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

@endsection
