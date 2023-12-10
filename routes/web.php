<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/div',[UserController::class,'dummy']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('/halo2', function (){
    return "<h1>Haloo Apa Kabar</h1>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('home', function () {
    return view('ETS');
});
Route::get('response-hey=open', function () {
    return view('hello');
});
Route::get('response-ling-file=open', function () {
    return view('link');
});
Route::get('open-link-style', function () {
    return view('style');
});
Route::get('response-boot-respon=open', function () {
    return view('responsive');
});
Route::get('latt-respon=open', function () {
    return view('latihan');
});
Route::get('response-js-first=open', function () {
    return view('js1');
});
Route::get('opn-file-valid', function () {
    return view('validasi');
});
Route::get('js-sc=open', function () {
    return view('js2');
});
Route::get('prjct-link-duplicate', function () {
    return view('linktree');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog2', function () {
    return view('home');
});
Route::get('/blog2/tentang', function () {
    return view('tentang');
});
Route::get('/blog2/kontak', function () {
    return view('kontak');
});
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@lihat');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@indexnilai');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');

Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@indexbelanja');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\BelanjaController@beli');
Route::post('/keranjangbelanja/masukkan','App\Http\Controllers\BelanjaController@masukkan');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\BelanjaController@batal');

Route::get('/minuman','App\Http\Controllers\MinumanController@index');
Route::get('/minuman/tambah','App\Http\Controllers\MinumanController@tambah');
Route::post('/minuman/store','App\Http\Controllers\MinumanController@store');
Route::get('/minuman/edit/{id}','App\Http\Controllers\MinumanController@edit');
Route::post('/minuman/update','App\Http\Controllers\MinumanController@update');
Route::get('/minuman/hapus/{id}','App\Http\Controllers\MinumanController@hapus');
Route::get('/minuman/cari','App\Http\Controllers\MinumanController@cari');
Route::get('/minuman/lihat/{id}','App\Http\Controllers\MinumanController@lihat');
