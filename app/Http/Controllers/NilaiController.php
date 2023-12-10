<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function indexnilai()
	{
    	// mengambil data dari table nilaikuliah
		$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data nilaikuliah ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

	// method untuk insert data ke table nilaikuliah
	public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}

}
