@extends('master')
@section('title','Edit Data Pegawai')
@section('konten')


	<h2>Edit Mahasiswa</h2>
	<h3>Institut Teknologi Sepuluh Nopember</h3>

	<a href="/mahasiswa"> Kembali</a>

	<br/>
	<br/>

	@foreach($mahasiswa as $m)
	<form class="container pl-4 form-horizontal" action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->NRP }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="col-sm-2">Nama</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan nama" value="{{ $m->Nama}}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2">Jurusan</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Masukkan jurusan" value="{{ $m->Jurusan }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">IPK</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="IPK" name="IPK" placeholder="Masukkan ipk" value="{{ $m->IPK }}" required="required">
            </div>
        </div>
        <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
    @endforeach
@endsection


