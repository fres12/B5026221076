@extends('master')
@section('title','Tambah Data Pegawai')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form class="container pl-4 form-horizontal" action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-2">Nama</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2">Jabatan</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">Umur</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan umur" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2">Alamat</label>
            <div class="col-7 col-xs-9">
            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required="required"></textarea>
            </div>
        </div>
		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/> --}}
		<center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
@endsection


