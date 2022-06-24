@extends('template.admin_main')

@section('title', 'Laporan')

@section('content')

    <div class="p-4">
        <form action=""></form>
        <h3 class="m-4">{{$data->judul}}</h3>
        <hr class="col-lg-12 ms-4">
        {{-- {{$data}} --}}
        <div class="wrapper-laporan-admin col-lg-6 p-5 m-5 rounded">
            <h5>Tentukan jumlah pertanyaan sesuai jenisnya terlebih dahulu</h5>
            <form action="/admin/laporan/addCountPertanyaan" method="POST" class="col-lg-6">
                @csrf
                <div class="mt-3">
                    <label for="jawabanText">Jawaban Text</label> 
                    <input type="hidden" name="idLaporan" id="idLaporan" value="{{$idLaporan}}"> 
                    <input type="text" name="jawabanText" required class="form-control mt-3">
                    @error('jawabanText')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="pilihanBerganda">Pilihan berganda</label>
                    <input type="text" name="pilihanBerganda" required class="form-control mt-3">
                    @error('jawabanText')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="kotakCentang">Kotak centang</label>
                    <input type="text" name="kotakCentang" required class="form-control mt-3">
                    @error('jawabanText')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="uploadFile">Upload file</label>
                    <input type="text" name="uploadFile" required class="form-control mt-3">
                    @error('jawabanText')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
            
    </div>

@endsection
