@extends('template.admin_main')

@section('title', 'Lembar Evaluasi')

@section('content')
    <div class="mx-auto p-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                        <form action="" class="form-group">
                            <p>Judul Evaluasi</p>
                            <input type="text" name="judul" id="judul">
                            <p>Tanggal Berakhir</p>
                            <input type="date">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $value->judul }}</td>
                        <td>{{ $value->tanggal_berakhir }}</td>
                        <td>{{ $value->aksi }}</td>
                        <td>
                            <a href="/admin/evaluasi/{{ $value->id }}" class="btn btn-warning">Edit</a>
                            <form action="/admin/evaluasi/delete/{{ $value->id }}" method="post">
                                @method('delete')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Hapus" />
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="fixed-bottom">
            <div class="d-flex">
                <div class="mx-auto">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
