@extends('template.main')

@section('title', 'Dokumen')

@section('content')

    <!-- Button trigger modal -->
    <div class="mx-auto ps-5 pe-5 pt-5">
        @if (auth()->user()->role == 'admin')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i> Tambah Dokumen
            </button>
        @elseif(auth()->user()->role == 'pimpinan')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i> Tambah Dokumen
            </button>
        @elseif(auth()->user()->role == 'kepaladepartemen')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i> Tambah Dokumen
            </button>
        @endif


        @if (session()->has('message'))
            <div class="alert alert-success pt-5">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST"
                        action="@if (auth()->user()->role == 'admin') /admin/dokumen/addDokumen
                    @elseif (auth()->user()->role == 'pimpinan')/pimpinan/dokumen/addDokumen
                    @elseif (auth()->user()->role == 'kepaladepartemen')/kepaladepartemen/dokumen/addDokumen @endif"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="p-4">
                            <label for="exampleFormControlInput1" class="form-label">Judul Dokumen</label>
                            <input type="text" name="judul" class="form-control" id="exampleFormControlInput1">
                            @error('judul')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="p-4">
                            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1" rows="10"
                                style="height: 100%;"></textarea>
                            @error('deskripsi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="p-4">
                            <label for="formFile" class="form-label">Upload Dokumen</label>
                            <input class="form-control" name="dokumen" type="file" id="formFile">
                            @error('dokumen')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-12 p-5">
                <table class="table table-hover table-striped shadow">
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $value->judul }}</td>

                                <td>
                                    <a href="
                                @if (auth()->user()->role == 'admin') /admin/dokumen/{{ $value->id }}
                                @elseif (auth()->user()->role == 'pimpinan') 
                                /pimpinan/dokumen/{{ $value->id }}
                                @elseif (auth()->user()->role == 'kepaladepartemen')
                                /kepaladepartemen/dokumen/{{ $value->id }} 
                                @elseif (auth()->user()->role == 'pelayan')
                                /pelayan/dokumen/{{ $value->id }} @endif
                                "
                                        class="btn btn-primary">
                                        <i class="far fa-eye"></i></a>

                                    @if (auth()->user()->role == 'admin')
                                        <form action="/admin/laporan/edit/{{ $value->id }}" method="post">
                                            @csrf
                                            <a class="btn btn-warning" type="submit"><i
                                                    class="fas fa-cog"></i></a>
                                        </form>
                                    @elseif (auth()->user()->role == 'pimpinan')
                                        <form action="/admin/laporan/edit/{{ $value->id }}" method="post">
                                            @csrf
                                            <a class="btn btn-warning" type="submit"><i
                                                    class="fas fa-cog"></i></a>
                                        </form>
                                    @elseif (auth()->user()->role == 'kepaladepartemen')
                                        <form action="/admin/laporan/edit/{{ $value->id }}" method="post">
                                            @csrf
                                            <a class="btn btn-warning" type="submit"><i
                                                    class="fas fa-cog"></i></a>
                                        </form>
                                    @endif

                                    @if (auth()->user()->role == 'admin')
                                        <form action="/admin/dokumen/deleteDokumen/{{ $value->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" type="submit" value="Hapus"><i class="fas fa-trash"></i></button>
                                        </form>
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
