@extends('template.admin_main')

@section('title', 'Dokumen')

@section('content')

    <div class="p-5">
        <h1 class="m-5">&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="text-dark"
            style="text-decoration: none;" href="
                @if (auth()->user()->role == 'admin') 
                /admin/dokumen/
                @elseif (auth()->user()->role == 'pimpinan')
                /pimpinan/dokumen/
                @elseif (auth()->user()->role == 'kepaladepatemen')
                /kepaladepartemen/dokumen/
                @elseif (auth()->user()->role == 'pelayan')
                /pelayan/dokumen/ @endif">
                <i class=" fa-solid fa-arrow-left"></i>&nbsp;&nbsp;Dokumen
            </a>
        </h1>
        <div class="card p-4 mx-auto shadow" style="width: 80rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $data->judul }}</h5>
                <hr>
                <p class="card-text">{{ $data->deskripsi }}</p>
                <p class="card-text">Download Dokumen : </p>
                <a href="{{ asset('dokumen') }}/{{ $data->dokumen }}">{{ $data->dokumen }}</a>
            </div>
            <div class="card-footer">
                <i class="fa-solid fa-calendar-day"></i> Tanggal upload : 22/12/12
            </div>
        </div>
    </div>
@endsection
