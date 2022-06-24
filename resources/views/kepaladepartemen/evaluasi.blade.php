@extends('template.main')

@section('title', 'Lembar Evaluasi')

@section('content')
    <div class="col-lg-6 p-5">
        <form action="/evaluasi/tambah" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">isi</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="isi">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><button type="button" class="btn btn-danger">Tutup</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><button type="button" class="btn btn-danger">Tutup</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Aktif</td>
                    <td>Ditutup</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
