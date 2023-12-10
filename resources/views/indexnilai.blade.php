@extends('master')
@section('title', 'Data Pegawai')
@section('konten')
    <center><h2>Data Mahasiswa</h2>
    <h3>Nilai Kuliah</h3></center>

    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai</a>

    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID </th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)
                        C
                    @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)
                        B
                    @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)
                        D
                    @endif

                </td>
                <td>
                    {{ $n->NilaiAngka * $n->SKS }}
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $pegawai->links() }} --}}
@endsection
