@extends('master')
@section('title','Data Pegawai')
@section('konten')
    <center><h2>Data Mahasiswa</h2>
	<h3>Institut Teknologi Sepuluh Nopember</h3></center>
	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>IPK</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->Nama }}</td>
			<td>{{ $m->Jurusan }}</td>
			<td>{{ $m->IPK }}</td>
			<td>
                <a href="/mahasiswa/lihat/{{ $m->NRP}}"class="btn btn-success">View</a>
                |
				<a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>

			</td>
		</tr>
		@endforeach
	</table>
@endsection
