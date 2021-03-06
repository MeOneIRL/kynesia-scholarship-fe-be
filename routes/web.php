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

Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('landingPage');
    })->name('home');
});

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
// Route::get('/portal/masuk', function () {
//     return view('portal.masukPortal');
// });

// Route::get('/portal/home', function () {
//     return view('portal.homePortal');
// });

// Route::get('/portal/profile', function () {
//     return view('portal.profilePortal');
// });

// Route::get('/portal/riwayat-pencairan-dana', function () {
//     return view('portal.riwayatPencairan');
// });

// Route::get('/portal/detail-post', function () {
//     return view('portal.postPortal');
// });

// Routing Ghema

// pendaftaran
Route::prefix('/registration')->group(function(){

    Route::get('/home', 'AuthController@homePageAccount')->name('homeAccount');

    Route::middleware('guest')->group(function(){
        Route::get('/register', 'AuthController@registerAccountForm')->name('registerAccountForm');
        Route::post('/register', 'AuthController@registerAccountPost')->name('registerAccountPost');
        Route::get('/verification/{verify_token}', 'AuthController@verifyAccount')->name('verifyAccount');
        Route::get('/login', 'AuthController@loginAccountForm')->name('loginAccountForm');
    });
    Route::post('/login', 'AuthController@loginAccountPost')->name('loginAccountPost');

    Route::middleware('auth')->group(function(){
        Route::get('/logout', 'AuthController@logoutAccount')->name('logoutAccount');
    });
    
    Route::middleware(['auth','user'])->group(function(){
        Route::get('/test', 'UserController@onlineTest')->name('onlineTest');
        Route::get('/test/done/{id}', 'UserController@doneOnlineTest')->name('doneOnlineTest');
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
        Route::get('/update/family/{user_id}', 'UserController@updateFamilyForm')->name('updateFamilyForm');
        Route::post('/update/family/{user_id}', 'UserController@updateFamilyPost')->name('updateFamilyPost');
        Route::get('/delete/child/{id}', 'UserController@childDelete')->name('childDelete');
        // End Family
    
        // Education
        Route::get('/education', 'UserController@educationForm')->name('educationForm');
        Route::post('/education', 'UserController@educationPost')->name('educationPost');
        Route::get('/update/education/{user_id}', 'UserController@updateEducationForm')->name('updateEducationForm');
        Route::post('/update/education/{user_id}', 'UserController@updateEducationPost')->name('updateEducationPost');
        Route::get('/update/delete/training/{id}', 'UserController@deleteTraining')->name('deleteTraining');
        Route::get('/update/delete/achievement/{id}', 'UserController@deleteAchievement')->name('deleteAchievement');
        Route::get('/update/delete/language/{id}', 'UserController@deleteLanguage')->name('deleteLanguage');
        Route::get('/update/delete/organization/{id}', 'UserController@deleteOrganization')->name('deleteOrganization');
        Route::get('/update/delete/talent/{id}', 'UserController@deleteTalent')->name('deleteTalent');
        // End Education
    
        // Downloadable
        Route::get('/downloadable', 'UserController@downloadableForm')->name('downloadableForm');
        Route::post('/downloadable', 'UserController@downloadablePost')->name('downloadablePost');
        // End Downloadable
    });

});

// Admin
Route::middleware(['admin','auth'])->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::get('/home', 'AdminController@homeAdmin')->name('homeAdmin');
    
        // Scholarship
        Route::get('/scholarship', 'AdminController@scholarshipAdmin')->name('scholarshipAdmin');
        Route::get('/scholarship/create', 'AdminController@scholarshipAdminForm')->name('scholarshipAdminForm');
        Route::post('/scholarship/create', 'AdminController@scholarshipAdminPost')->name('scholarshipAdminPost');
        Route::get('/scholarship/activate/{id}', 'AdminController@scholarshipAdminActivate')->name('scholarshipAdminActivate');
        Route::get('/scholarship/deactivate/{id}', 'AdminController@scholarshipAdminDeactivate')->name('scholarshipAdminDeactivate');
        Route::get('/scholarship/update/{id}', 'AdminController@scholarshipAdminUpdateForm')->name('scholarshipAdminUpdateForm');
        Route::post('/scholarship/update/{id}', 'AdminController@scholarshipAdminUpdatePost')->name('scholarshipAdminUpdatePost');
        Route::delete('/scholarship/delete/{id}', 'AdminController@scholarshipAdminDelete')->name('scholarshipAdminDelete');
        // Scholarship End
    
        // Seleksi
        Route::get('/registered', 'AdminController@registeredAdmin')->name('registeredAdmin');
        Route::get('/registered/stepOne/accept/{id}', 'AdminController@stepOneAdminForm')->name('stepOneAdminForm');
        Route::post('/registered/stepOne/accept/{id}', 'AdminController@stepOneAdminAccept')->name('stepOneAdminAccept');
        Route::post('/registered/stepOne/deny/{id}', 'AdminController@stepOneAdminDeny')->name('stepOneAdminDeny');
        Route::post('/registered/stepTwo/accept/{id}', 'AdminController@stepTwoAdminAccept')->name('stepTwoAdminAccept');
        Route::post('/registered/stepTwo/deny/{id}', 'AdminController@stepTwoAdminDeny')->name('stepTwoAdminDeny');
        Route::get('/registered/detail/{id}', 'AdminController@detailAdmin')->name('detailAdmin');
        // Seleksi End
    
        // Pencairan Dana
        Route::get('/funding', 'AdminController@fundingAdmin')->name('fundingAdmin');
        Route::get('/funding/one', 'AdminController@fundingOneForm')->name('fundingOneForm');
        Route::post('/funding/one', 'AdminController@fundingOnePost')->name('fundingOnePost');
        Route::get('/funding/bulk', 'AdminController@fundingBulkForm')->name('fundingBulkForm');
        Route::post('/funding/bulk', 'AdminController@fundingBulkPost')->name('fundingBulkPost');
        Route::post('/funding/cairkan/{id}', 'AdminController@fundingPencairan')->name('fundingPencairan');
        Route::delete('/funding/delete/{id}', 'AdminController@fundingDelete')->name('fundingDelete');
        // End Pencairan Dana
    
        // Post
        Route::get('/post', 'AdminController@postAdmin')->name('postAdmin');
        Route::get('/post/create', 'AdminController@postAdminForm')->name('postAdminForm');
        Route::post('/post/create', 'AdminController@postAdminPost')->name('postAdminPost');
        Route::get('/post/edit/{id}', 'AdminController@postEditAdminForm')->name('postEditAdminForm');
        Route::post('/post/edit/{id}', 'AdminController@postEditAdminPost')->name('postEditAdminPost');
        Route::delete('/post/delete/{id}', 'AdminController@postDeleteAdminPost')->name('postDeleteAdminPost');
        // End Post
    });
});

// Portal
Route::get('/portal/login', 'PortalController@loginPortal')->name('loginPortal');

Route::middleware(['auth','portal'])->group(function(){
    Route::prefix('/portal')->group(function(){
        Route::get('/home', 'PortalController@homePortal')->name('homePortal');
        Route::get('/profile', 'PortalController@profilePortal')->name('profilePortal');
        Route::post('/profile', 'PortalController@profilePortalPost')->name('profilePortalPost');
        Route::get('/funding', 'PortalController@fundingPortal')->name('fundingPortal');
        Route::get('/post/{id}', 'PortalController@detailPost')->name('detailPost');
    });
});
// End Portal

Route::get('/email', function(){
    return view('mail.verification');
});

// Reset Password
Route::middleware('guest')->group(function(){
    Route::prefix('/reset')->group(function(){
        Route::get('/email','AuthController@emailForm')->name('emailForm');
        Route::post('/email','AuthController@emailPost')->name('emailPost');
        Route::get('/password/{token}','AuthController@passwordForm')->name('passwordForm');
        Route::post('/password/{token}','AuthController@passwordPost')->name('passwordPost');
    });
});
// End Reset Password

// Help
Route::prefix('/help')->group(function(){
    Route::get('/question', 'AuthController@helpForm')->name('helpForm');
    Route::post('/question', 'AuthController@helpPost')->name('helpPost');
});
// End Help