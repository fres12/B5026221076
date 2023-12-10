@extends('master')
@section('title','Beli')
@section('konten')

	<h2>Beli Barang</h2>


	<br/>
	<br/>

	<form class="container pl-4 form-horizontal" action="/keranjangbelanja/masukkan" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2">Kode Barang</label>
            <div class="col-7 col-xs-9">
            <input type="number" class="form-control" id="kodebarang" name="kodebarang" placeholder="Masukkan kode barang" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">Jumlah</label>
            <div class="col-7 col-xs-9">
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2">Harga</label>
            <div class="col-7 col-xs-9">
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga" required="required">
            </div>
        </div>
		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/> --}}
		<a href="/keranjangbelanja"><center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center></a>
	</form>
@endsection


