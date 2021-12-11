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
})->name('home');

Route::get('/bantuan', function () {
    return view('bantuan');
});

// Pendaftaran
// Route::get('/pendaftaran/masuk', function () {
//     return view('pendaftaran.masukPendaftaran');
// });

// Route::get('/pendaftaran/daftar', function () {
//     return view('pendaftaran.daftarPendaftaran');
// });

// Route::get('/pendaftaran/home', function () {
//     return view('pendaftaran.homePendaftaran');
// });

// Route::get('/pendaftaran/form-data-pribadi', function () {
//     return view('pendaftaran.formDataPribadi');
// });

// Route::get('/pendaftaran/form-data-keluarga', function () {
//     return view('pendaftaran.formDataKeluarga');
// });

// Route::get('/pendaftaran/form-data-pendidikan', function () {
//     return view('pendaftaran.formDataPendidikan');
// });

// Route::get('/pendaftaran/form-unduhan', function () {
//     return view('pendaftaran.formUnduhan');
// });

// Route::get('/pendaftaran/tes-online', function () {
//     return view('pendaftaran.tesOnline');
// });

// Route::get('/pendaftaran/wawancara', function () {
//     return view('pendaftaran.wawancara');
// });

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

// Routing Ghema

// pendaftaran
Route::prefix('/registration')->group(function(){

    Route::get('/home', 'AuthController@homePageAccount')->name('homeAccount');
    Route::get('/register', 'AuthController@registerAccountForm')->name('registerAccountForm');
    Route::post('/register', 'AuthController@registerAccountPost')->name('registerAccountPost');
    Route::get('/verification/{verify_token}', 'AuthController@verifyAccount')->name('verifyAccount');
    Route::get('/login', 'AuthController@loginAccountForm')->name('loginAccountForm');
    Route::post('/login', 'AuthController@loginAccountPost')->name('loginAccountPost');
    Route::get('/logout', 'AuthController@logoutAccount')->name('logoutAccount');
    Route::get('/test', 'UserController@onlineTest')->name('onlineTest');
    Route::get('/interview', 'UserController@onlineInterview')->name('onlineInterview');

    // Biodata
    Route::get('/biodata', 'UserController@biodataForm')->name('biodataForm');
    Route::post('/biodata', 'UserController@biodataPost')->name('biodataPost');
    Route::get('/update/biodata/{user_id}', 'UserController@updateBiodataForm')->name('updateBiodataForm');
    Route::post('/update/biodata/{user_id}', 'UserController@updateBiodataPost')->name('updateBiodataPost');
    // End Biodata

    // Family
    Route::get('/family', 'UserController@familyForm')->name('familyForm');
    Route::post('/family', 'UserController@familyPost')->name('familyPost');
    Route::get('/udpate/family/{user_id}', 'UserController@updateFamilyForm')->name('updateFamilyForm');
    Route::post('/udpate/family/{user_id}', 'UserController@updateFamilyPost')->name('updateFamilyPost');
    // Family

    Route::get('/education', 'UserController@educationForm')->name('educationForm');
    Route::post('/education', 'UserController@educationPost')->name('educationPost');

    Route::get('/downloadable', 'UserController@downloadableForm')->name('downloadableForm');
    Route::post('/downloadable', 'UserController@downloadablePost')->name('downloadablePost');

});