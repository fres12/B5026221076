<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function indexbelanja()
	{
    	// mengambil data dari table keranjangbelanja
		$belanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjangbelanja ke view index
		return view('indexbelanja',['keranjangbelanja' => $belanja]);

	}

	// method untuk menampilkan view form beli
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table belanja
	public function masukkan(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->kodepembelian,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

	// method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
