@extends('master')
@section('title','Lihat Data Pegawai')
@section('konten')
@foreach ($pegawai as $p)
    <br/>
    <br/>
    <div class="row mb-5">
        <div class="col-5 bg-light"></div>
        <div class="col ml-4">
            <h2 class="mt-2 mb-5">Data Pegawai</h2>
            <h5 class="my-3">Nama : {{ $p->pegawai_nama }} </h5>
            <h5 class="my-3">Jabatan : {{ $p->pegawai_jabatan }} </h5>
            <h5 class="my-3">Umur : {{ $p->pegawai_umur }} </h5>
            <h5 class="my-3">Alamat : {{ $p->pegawai_alamat }} </h5>
            <a href="/pegawai" class="btn btn-primary col-5">OK</a>
            <div class="mb-3"></div>
        </div>
    </div>
@endforeach
@endsection
