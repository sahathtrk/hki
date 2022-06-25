@extends('template.admin_main')

@section('title', 'Laporan')

@section('content')

    <div class="p-4">
        <form action=""></form>
        <h3 class="m-4">{{ $data->judul }}</h3>
        <hr class="col-lg-12 ms-4">
        {{-- {{$data}} --}}
        <div class="container mt-3">
            <!-- Nav pills -->
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#pilgan">Pilihan Berganda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#teks">Jawaban Teks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#centang">Kotak Centang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#menu3">Upload File</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="pilgan" class="container tab-pane active"><br>
                        <p>Masukkan pertanyaan </p>
                        <input class="form-control" type="text" placeholder="Masukkan pertanyaan" name="pertanyaan_pilgan" id="" value=""><br>
                        <p>Masukkan pilihan jawaban</p>                    
                        <input class="form-control" type="text" placeholder="Masukkan opsi A" name="opsiA" id="" value=""><br>                   
                        <input class="form-control" type="text" placeholder="Masukkan opsi B" name="opsiB" id="" value=""><br>                
                        <input class="form-control" type="text" placeholder="Masukkan opsi C" name="opsiC" id="" value=""><br>                  
                        <input class="form-control" type="text" placeholder="Masukkan opsi D" name="opsiD" id="" value=""><br>                  
                    </div>
                    <div id="teks" class="container tab-pane fade"><br>
                        <p>Masukkan pertanyaan</p>
                        <input class="form-control" type="text" placeholder="Masukkan pertanyaan" name="pertanyaan_teks" id="" value=""><br>
                    </div>
                    <div id="centang" class="container tab-pane fade"><br>
                        <p>Masukkan pertanyaan</p>
                        <input class="form-control" type="text" placeholder="Masukkan pertanyaan" name="pertanyaan_centang" id="" value=""><br>
                        <p>Masukkan pilihan jawbaan</p>
                        <input class="form-control" type="text" placeholder="Masukkan opsi 1" name="opsi1" id="" value=""><br>                     
                        <input class="form-control" type="text" placeholder="Masukkan opsi 2" name="opsi2" id="" value=""><br>                     
                        <input class="form-control" type="text" placeholder="Masukkan opsi 3" name="opsi3" id="" value=""><br>                   
                        <input class="form-control" type="text" placeholder="Masukkan opsi 4" name="opsi4" id="" value=""><br> 
                        <input class="form-control" type="text" placeholder="Masukkan opsi 5" name="opsi5" id="" value=""><br> 
                        <input class="form-control" type="text" placeholder="Masukkan opsi 6" name="opsi6" id="" value=""><br> 
                        <input class="form-control" type="text" placeholder="Masukkan opsi 7" name="opsi7" id="" value=""><br> 
                        <input class="form-control" type="text" placeholder="Masukkan opsi 8" name="opsi8" id="" value=""><br> 
                        <input class="form-control" type="text" placeholder="Masukkan opsi 9" name="opsi9" id="" value=""><br> 
                    </div>
                    <div id="menu3" class="container tab-pane fade"><br>
                        <p>Masukkan teks</p>
                        <input class="form-control" type="text" placeholder="Masukkan teks" name="pertanyaan_" id="" value=""><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
