@extends('master')
@section('title','Lihat Minuman')
@section('konten')
@foreach ($minuman as $m)
    <br/>
    <br/>
    <div class="row mb-5">
        <div class="col-5 bg-light"></div>
        <div class="col ml-4">
            <h2 class="mt-2 mb-5">Data Minuman</h2>
            <h5 class="my-3">ID : {{ $m->kodeminuman }} </h5>
            <h5 class="my-3">Minuman : {{ $m->merkminuman }} </h5>
            <h5 class="my-3">Stock : {{ $m->stockminuman }} </h5>
            <h5 class="my-3">Ketersediaan : {{ ($m->tersedia == 'Y')? 'Tersedia':'Tidak Tersedia' }} </h5>
            <a href="/minuman" class="btn btn-primary col-5">OK</a>
            <div class="mb-3"></div>
        </div>
    </div>
@endforeach
@endsection
