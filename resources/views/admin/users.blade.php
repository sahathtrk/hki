@extends('template.admin_main')

@section('title', 'Daftar User')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Nama Pengguna</th>
                            <th scope="col" class="text-center">Jabatan</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <th scope="row" class="text-center">{{ ++$key }}</th>
                                <td>{{ $value->nama }}</td>
                                <td>{{ $value->role }}</td>
                                <td class="text-center">
                                    <form action="/admin/users/delete/{{ $value->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <span class="fa-solid fa-trash"></span>
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
