@extends('master')
@section('title','Tambah Nilai Mahasiswa')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>


	<br/>
	<br/>

	<form class="container pl-4 form-horizontal" action="/nilai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2">NRP</label>
            <div class="col-7 col-xs-9">
            <input type="number" class="form-control" id="NRP" name="NRP" placeholder="Masukkan NRP" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">Nilai Angka</label>
            <div class="col-7 col-xs-9">
            <input type="number" class="form-control" id="nilaiangka" name="nilaiangka" placeholder="Masukkan nilaiangka" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">SKS</label>
            <div class="col-7 col-xs-9">
            <input type="number" class="form-control" id="SKS" name="SKS" placeholder="Masukkan SKS" required="required">
            </div>
        </div>
		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/> --}}
		<a href="/nilaikuliah"><center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center></a>
	</form>
@endsection


