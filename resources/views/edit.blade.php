@extends('master')
@section('title','Edit Data Pegawai')
@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form class="container pl-4 form-horizontal" action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="col-sm-2">Nama</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" value="{{ $p->pegawai_nama }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2">Jabatan</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" value="{{ $p->pegawai_jabatan }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">Umur</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan umur" value="{{ $p->pegawai_umur }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2">Alamat</label>
            <div class="col-7 col-xs-9">
            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
    @endforeach
@endsection


