@extends('master')
@section('title','Tambah Data Minuman')
@section('konten')

	<h2>Tambah Minuman</h2>

	<br/>
	<br/>

	<form class="container pl-4 form-horizontal" action="/minuman/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-sm-2">Merk minuman</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan merk minuman" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2">Stock</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan stock" required="required">
            </div>
        </div>
		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/> --}}
		<center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
@endsection


