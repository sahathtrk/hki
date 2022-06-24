@extends('template.main')

@section('title', 'Profile - Data Pribadi')

@section('content')
    @include('includes.public.profile-nav')
    @if ($isEmpty)
        <form
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-pribadi/add @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-pribadi/add @elseif (auth()->user()->role == 'pelayan')/pelayan/profile/data-pribadi/add @endif "
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
                                <h4 class="text-right">Data Pribadi</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Nama Lengkap</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap anda" value=""
                                        name="nama">
                                    @error('nama')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">NIK</label><input type="text"
                                        class="form-control" placeholder="Masukkan NIK sesuai pada KTP" value=""
                                        name="nik">
                                    @error('nik')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="lakilaki" value="Laki-laki"
                                            name="gender">
                                        @error('gender')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="lakilaki">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="perempuan" value="Perempuan"
                                            name="gender">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ibu</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ibu anda" value=""
                                        name="nama_ibu">
                                    @error('nama_ibu')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ayah</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ayah anda" value=""
                                        name="nama_ayah">
                                    @error('nama_ayah')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Tinggi Badan (cm)</label><input type="text"
                                        class="form-control" placeholder="Masukkan tinggi badan" value=""
                                        name="tinggi">
                                    @error('tinggi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Berat Badan (kg)</label><input type="text"
                                        class="form-control" placeholder="Masukkan berat badan" value=""
                                        name="berat">
                                    @error('berat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels" name="golongan_darah">Golongan Darah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="A"
                                            name="golongan_darah">
                                        @error('golongan_darah')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio1" name="">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah"
                                            id="inlineRadio2" value="B">
                                        @error('golongan_darah')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio2">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah"
                                            id="inlineRadio2" value="O">
                                        <label class="form-check-label" for="inlineRadio2">O</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah"
                                            id="inlineRadio2" value="AB">
                                        <label class="form-check-label" for="inlineRadio2">AB</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Hobby</label><input type="text"
                                        class="form-control" placeholder="Masukkan hobby anda" value=""
                                        name="hobby">
                                    @error('hobby')
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
                                    class="form-control" placeholder="Masukkan nomor HP anda" value=""
                                    name="no_hp">
                                @error('no_hp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div> <br>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="Masukkan email anda" value=""
                                    name="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div><br>
                            <div class="col-md-12"><label class="labels">Akun Media Sosial</label><input type="text"
                                    class="form-control" placeholder="Masukkan akun media sosial anda (jika ada)"
                                    value="" name="sosial_media">
                                @error('sosial_media')
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
            action="@if (auth()->user()->role == 'pimpinan') /pimpinan/profile/data-pribadi/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'kepaladepartemen') /kepaladepartemen/profile/data-pribadi/update/{{ $data[0]->id }} @elseif (auth()->user()->role == 'pelayan')/pelayan/profile/data-pribadi/update/{{ $data[0]->id }} @endif "method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{ $data[0]->id }}">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                class="rounded-circle mt-5" width="150px" height="150px"
                                src="{{ asset('img/profile') }}/{{ $data[0]->img_user }}">
                            <input type="file" name="img_user" id="" value="{{ asset('img/profile') }}/{{$data[0]->img_user}}">
                            @error('img_user')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Pribadi</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Nama Lengkap</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap anda"
                                        value="{{ $data[0]->nama }}" name="nama">
                                    @error('nama')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">NIK</label><input type="text"
                                        class="form-control" placeholder="Masukkan NIK sesuai pada KTP"
                                        value="{{ $data[0]->nik }}" name="nik">
                                    @error('nik')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="lakilaki" value="Laki-laki"
                                            @if ($data[0]->gender == 'Laki-laki') checked @endif name="gender">
                                        @error('gender')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="lakilaki">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="perempuan" value="Perempuan"
                                            @if ($data[0]->gender == 'Perempuan') checked @endif name="gender">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ibu</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ibu anda"
                                        value="{{ $data[0]->nama_ibu }}" name="nama_ibu">
                                    @error('nama_ibu')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels">Nama Ayah</label><input type="text"
                                        class="form-control" placeholder="Masukkan nama lengkap ayah anda"
                                        value="{{ $data[0]->nama_ayah }}" name="nama_ayah">
                                    @error('nama_ayah')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Tinggi Badan (cm)</label><input
                                        type="text" class="form-control" placeholder="Masukkan tinggi badan"
                                        value="{{ $data[0]->tinggi }}" name="tinggi">
                                    @error('tinggi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6"><label class="labels">Berat Badan (kg)</label><input type="text"
                                        class="form-control" placeholder="Masukkan berat badan"
                                        value="{{ $data[0]->berat }}" name="berat">
                                    @error('berat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12"><label class="labels" name="golongan_darah">Golongan Darah</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineRadio1" value="A"
                                            @if ($data[0]->golongan_darah == 'A') checked @endif name="golongan_darah">
                                        @error('golongan_darah')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio1" name="">A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah"
                                            @if ($data[0]->golongan_darah == 'B') checked @endif id="inlineRadio2"
                                            value="B">
                                        @error('golongan_darah')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <label class="form-check-label" for="inlineRadio2">B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah"
                                            @if ($data[0]->golongan_darah == 'O') checked @endif id="inlineRadio2"
                                            value="O">
                                        <label class="form-check-label" for="inlineRadio2">O</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="golongan_darah"
                                            @if ($data[0]->golongan_darah == 'AB') checked @endif id="inlineRadio2"
                                            value="AB">
                                        <label class="form-check-label" for="inlineRadio2">AB</label>
                                    </div>
                                </div>
                                <div class="col-md-12"><label class="labels">Hobby</label><input type="text"
                                        class="form-control" placeholder="Masukkan hobby anda"
                                        value="{{ $data[0]->hobby }}" name="hobby">
                                    @error('hobby')
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
                                    class="form-control" placeholder="Masukkan nomor HP anda"
                                    value="{{ $data[0]->no_hp }}" name="no_hp">
                                @error('no_hp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div> <br>
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="Masukkan email anda"
                                    value="{{ $data[0]->email }}" name="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div><br>
                            <div class="col-md-12"><label class="labels">Akun Media Sosial</label><input type="text"
                                    class="form-control" placeholder="Masukkan akun media sosial anda (jika ada)"
                                    value="{{ $data[0]->sosial_media }}" name="sosial_media">
                                @error('sosial_media')
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
