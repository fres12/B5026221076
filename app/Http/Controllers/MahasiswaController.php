<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table mahasiswa
		$mahasiswa = DB::table('mahasiswa')->get();

    	// mengirim data mahasiswa ke view index
		return view('indexmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// method untuk edit data mahasiswa
	public function edit($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data mahasiswa yang didapat ke view edit.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	// update data mahasiswa
	public function update(Request $request)
	{
		// update data mahasiswa
		DB::table('mahasiswa')->where('NRP',$request->id)->update([
			'Nama' => $request->Nama,
			'Jurusan' => $request->Jurusan,
			'IPK' => $request->IPK
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');
	}

    public function lihat($id)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data mahasiswa yang didapat ke view edit.blade.php
		return view('lihatmahasiswa',['mahasiswa' => $mahasiswa]);

	}
}
