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
