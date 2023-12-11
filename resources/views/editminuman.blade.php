@extends('master')
@section('title','Minuman')
@section('konten')


	<center><h2>Edit Minuman</h2></center>


	<br/>
	<br/>

	@foreach($minuman as $m)
	<form class="container pl-4 form-horizontal" action="/minuman/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="id" value="{{ $m->kodeminuman }}" >
            <label for="nama" class="col-sm-2">Merk Minuman</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="merk" name="me" placeholder="Masukkan merk" value="{{ $m->merkminuman }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2">Stock Minuman</label>
            <div class="col-7 col-xs-9">
            <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan stock" value="{{ $m->stockminuman }}" required="required">
            </div>
        </div>
        <center class="my-2"><input type="submit" class="btn btn-primary" value="Simpan Data"></center>
	</form>
    @endforeach
@endsection


