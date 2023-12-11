@extends('master')
@section('title','Lihat Data Pegawai')
@section('konten')
@foreach ($mahasiswa as $m)
    <br/>
    <br/>
    <div class="row mb-5">
        <div class="col-5 bg-light"></div>
        <div class="col ml-4">
            <h2 class="mt-2 mb-5">Data Mahasiswa</h2>
            <h5 class="my-3">NRP : {{ $m->NRP }} </h5>
            <h5 class="my-3">Nama : {{ $m->Nama }} </h5>
            <h5 class="my-3">Jurusan : {{ $m->Jurusan }} </h5>
            <h5 class="my-3">IPK : {{ $m->IPK }} </h5>
            <a href="/mahasiswa" class="btn btn-primary col-5">OK</a>
            <div class="mb-3"></div>
        </div>
    </div>
@endforeach
@endsection
