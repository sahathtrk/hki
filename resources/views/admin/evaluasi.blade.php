@extends('template.admin_main')

@section('title', 'Lembar Evaluasi')

@section('content')
    <div class="mx-auto p-4 col-lg-10 mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            + Buat Formulir Baru
        </button>

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
                        <form action="@if (auth()->user()->role == 'admin') /admin/evaluasi/add @endif" method="POST"
                            class="form-group">
                            @csrf
                            <p>Judul Evaluasi</p>
                            <input class="form-control" type="text" name="judul" id="judul">
                            <p>Tanggal Berakhir</p>
                            <input type="date" name="tanggal_berakhir" class="form-control">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                                <th scope="col" class="text-center">Tanggal</th>
                                <th scope="col" class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr>
                                    <th scope="row" class="text-center">{{ ++$key }}</th>
                                    <td class="text-center">{{ $value->judul }}</td>
                                    <td class="text-center">{{ $value->tanggal_berakhir }}</td>
                                    <td class="text-center">
                                        <form action="/admin/evaluasi/delete/{{ $value->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"type="submit" value="Hapus"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <button class="btn btn-primary"type="submit" value="Hapus"><i class="far fa-eye"></i></button>
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
