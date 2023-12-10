@extends('master')
@section('title', 'Data Minuman')
@section('konten')
    <center>
        <h2>Data Minuman</h2>
        <h3>Produk minuman di minimarket</h3>
    </center>
    <br />
    <br />

    <a href="/minuman/tambah" class="btn btn-primary"> + Tambah Minuman Baru</a>

    <br />
    <p>Cari Data Minuman</p>
    <form action="/minuman/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Nama Tas..." value="{{ old('cari')}}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Minuman</th>
            <th>Merk Minuman</th>
            <th>Stock Minuman</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($minuman as $m)
            <tr>
                <td>{{ $m->kodeminuman }}</td>
                <td>{{ $m->merkminuman }}</td>
                <td>{{ $m->stockminuman }}</td>
                <td>{{ ($m->tersedia == 'Y')? 'Tersedia':'Tidak Tersedia' }}</td>
                <td>
                    <a href="/minuman/lihat/{{ $m->kodeminuman }}"class="btn btn-success">Lihat</a>
                    |
                    <a href="/minuman/edit/{{ $m->kodeminuman }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/minuman/hapus/{{ $m->kodeminuman }}"class="btn btn-danger">Hapus</a>

                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $minuman->links() }} --}}
@endsection
