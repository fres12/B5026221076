@extends('master')
@section('title', 'Keranjang Belanja')
@section('konten')
    <center>
        <h2>Keranjang Belanja</h2>
    </center>
            <br />
            <br />

            <a href="/keranjangbelanja/beli" class="btn btn-warning mb-2"> + Beli</a>

            <table class="table table-striped table-hover">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah pembelian</th>
                    <th>Harga per item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                @foreach ($keranjangbelanja as $b)
                    <tr>
                        <td>{{ $b->ID }}</td>
                        <td>{{ $b->KodeBarang }}</td>
                        <td>{{ $b->Jumlah }}</td>
                        <td>{{ $b->Harga }}</td>
                        <td> {{ $b->Jumlah * $b->Harga }}</td>
                        <td> |
                            <a href="/keranjangbelanja/batal/{{ $b->ID }}"class="btn btn-danger">Hapus</a>

                        </td>
                    </tr>
                @endforeach
            </table>
        @endsection
