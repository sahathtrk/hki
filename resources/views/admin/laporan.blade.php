@extends('template.admin_main')

@section('title', 'Laporan')

@section('content')


    <div class="mx-auto p-4 col-lg-10 mt-5">


        @if (session()->has('message'))
            <div class="alert alert-success pt-5">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Button trigger modal -->
        @if (auth()->user()->role == 'admin')
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                + Buat Formulir Baru
            </button>
        @endif

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Buat Formulir Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" class="form-group" action="/admin/laporan/addLaporan">
                            @csrf
                            <div class="p-4">
                                <label for="judulDokumen" class="form-label">Judul Laporan</label>

                                <input type="text" name="judul" class="form-control" id="judulDokumen" autofocus
                                    required>
                                @error('judul')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="p-4">
                                <label for="jenisLaporan" class="form-label">Jenis Laporan</label>
                                <select class="form-select" name="jenis" required>
                                    <option selected disabled>---</option>
                                    <option value="Laporan Awal Tahun">Laporan Awal Tahun</option>
                                    <option value="Laporan Akhit Tahun">Laporan Akhir Tahun</option>
                                </select>
                                @error('jenis')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="p-4">
                                <label for="tanggalBerakhir" class="form-label">Tanggal Berakhir</label>
                                <input type="date" name="tanggal_berakhir" class="form-control" required>
                                @error('tanggal_berakhir')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Judul</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <th scope="row" class="text-center">{{ ++$key }}</th>
                                    <td>
                                        <a style="text-decoration:none;"
                                            href="/admin/laporan/{{ $value->id }}">{{ $value->judul }}</a>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label"
                                                for="flexSwitchCheckChecked">{{ $value->aksi }}</label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <form action="/admin/laporan/delete/{{ $value->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><span
                                                    class="fa-solid fa-trash"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-bottom">
        <div class="d-flex">
            <div class="mx-auto">
                {{ $data->links() }}
            </div>
        </div>
    </div>




@endsection
