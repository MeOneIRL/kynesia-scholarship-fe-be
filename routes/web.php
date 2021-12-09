<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('landingPage');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// Pendaftaran
Route::get('/pendaftaran/masuk', function () {
    return view('pendaftaran.masukPendaftaran');
});

Route::get('/pendaftaran/daftar', function () {
    return view('pendaftaran.daftarPendaftaran');
});

Route::get('/pendaftaran/home', function () {
    return view('pendaftaran.homePendaftaran');
});

Route::get('/pendaftaran/form-data-pribadi', function () {
    return view('pendaftaran.formDataPribadi');
});

Route::get('/pendaftaran/form-data-keluarga', function () {
    return view('pendaftaran.formDataKeluarga');
});

Route::get('/pendaftaran/form-data-pendidikan', function () {
    return view('pendaftaran.formDataPendidikan');
});

Route::get('/pendaftaran/form-unduhan', function () {
    return view('pendaftaran.formUnduhan');
});

Route::get('/pendaftaran/tes-online', function () {
    return view('pendaftaran.tesOnline');
});

Route::get('/pendaftaran/wawancara', function () {
    return view('pendaftaran.wawancara');
});

// Portal
Route::get('/portal/masuk', function () {
    return view('portal.masukPortal');
});

Route::get('/portal/home', function () {
    return view('portal.homePortal');
});

Route::get('/portal/profile', function () {
    return view('portal.profilePortal');
});

Route::get('/portal/riwayat-pencairan-dana', function () {
    return view('portal.riwayatPencairan');
});

Route::get('/portal/detail-post', function () {
    return view('portal.postPortal');
});
