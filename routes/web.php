<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


//admin
Route::middleware('isAdmin')->group(function () {
    Route::get('/admin/dokumen', 'Shared\DokumenController@dokumen')->name('admin_dokumen');
    Route::get('/admin/dokumen/{id}', 'Shared\DokumenController@getDokumenById')->name('admin_dokumen_id');
    Route::post('/admin/dokumen/addDokumen', 'Shared\DokumenController@addDokumen')->name('admin_addDokumen');
    Route::delete('admin/dokumen/deleteDokumen/{id}', 'Shared\DokumenController@deleteDokumen')->name('admin_deleteDokumen');

    Route::get('/admin/laporan/', 'Admin\LaporanController@getAllLaporan')->name('admin_laporan');
    Route::get('/admin/laporan/{id}', 'Admin\LaporanController@getLaporanById')->name('admin_getLaporanById');
    Route::post('/admin/laporan/addLaporan', 'Admin\LaporanController@addLaporan')->name('admin_addLaporan');
    Route::get('/admin/laporan/addPertanyaan/{id}', 'Admin\LaporanController@addPertanyaan')->name('admin_addPertanyaan');
    Route::delete('/admin/laporan/delete/{id}', 'Admin\LaporanController@deleteLaporan')->name('admin_deleteLaporan');
    Route::patch('/admin/laporan/updateAction{id}', 'Admin\LaporanController@updateAction')->name('admin_updateAction');
    Route::post('/admin/laporan/formulir/{id}', 'Admin\LaporanController@addFormulir')->name('admin_addFormulir');

    Route::get('/admin/evaluasi/', 'Admin\EvaluasiController@getAllEvaluasi')->name('admin_evaluasi');
    Route::get('/admin/evaluasi/{id}', 'Admin\EvaluasiController@getEvaluasiById')->name('admin_getEvaluasiById');
    Route::post('/admin/evaluasi/add', 'Admin\EvaluasiController@addEvaluasi')->name('admin_addEvaluasi');
    Route::delete('/admin/evaluasi/delete{id}', 'Admin\EvaluasiController@deleteEvaluasi')->name('admin_deleteEvaluasi');
    Route::patch('/admin/evaluasi/updateAction/{id}', 'Admin\EvaluasiController@updateAction')->name('admin_updateAction');
    Route::post('/admin/evaluasi/formulir/{id}', 'Admin\EvaluasiController@addFormulir')->name('admin/addFormulir');
    Route::get('/admin/evaluasi/pimpinan/', 'Admin\EvaluasiController@pimpinan')->name('evaluasi_pimpinan');

    Route::get('/admin/users', 'Admin\UsersController@getAllUsers')->name('admin_users');
    Route::get('/admin/users/{id}', 'Admin\UsersController@getUsersById')->name('admin_getUsersbyId');
    Route::delete('/admin/users/delete/{id}', 'Admin\UsersController@deleteUsers')->name('');
});

//Pucuk Pimpinan
Route::middleware('isPimpinan')->group(function () {
    Route::get('/pimpinan/dokumen', 'Shared\DokumenController@dokumen')->name('pimpinan_dokumen');
    Route::get('/pimpinan/dokumen/{id}', 'Shared\DokumenController@getDokumenById')->name('pimpinan_dokumen_id');
    Route::post('/pimpinan/dokumen/addDokumen', 'Shared\DokumenController@addDokumen')->name('pimpinan_addDokumen');

    Route::get('/pimpinan/laporan', 'Pimpinan\LaporanController@laporan')->name('pimpinan_laporan');
    Route::get('/pimpinan/evaluasi', 'Pimpinan\EvaluasiController@evaluasi')->name('pimpinan_evaluasi');

    Route::get('/pimpinan/profile/data-pribadi', 'Shared\ProfileController@profilePribadi')->name('pimpinan_profile');
    Route::get('/pimpinan/profile/data-gerejawi', 'Shared\ProfileController@profileGerejawi')->name('pimpinan_profilegerejawi');
    Route::get('/pimpinan/profile/data-formal', 'Shared\ProfileController@profileFormal')->name('pimpinan_profileformal');
    Route::get('/pimpinan/profile/data-informal', 'Shared\ProfileController@profileInformal')->name('pimpinan_profileinformal');
    Route::get('/pimpinan/profile/data-pasangan', 'Shared\ProfileController@profilePasangan')->name('pimpinan_profilepasangan');
    Route::get('/pimpinan/profile/data-anak', 'Shared\ProfileController@profileAnak')->name('pimpinan_profileanak');

    Route::post('/pimpinan/profile/data-pribadi/add', 'Shared\ProfileController@addProfilePribadi')->name('pimpinan_profile_add');
    Route::post('/pimpinan/profile/data-gerejawi/add', 'Shared\ProfileController@addProfileGerejawi')->name('pimpinan_profilegerejawi_add');
    Route::post('/pimpinan/profile/data-formal/add', 'Shared\ProfileController@addProfileFormal')->name('pimpinan_profileformal_add');
    Route::post('/pimpinan/profile/data-informal/add', 'Shared\ProfileController@addProfileInformal')->name('pimpinan_profileinformal_add');
    Route::post('/pimpinan/profile/data-pasangan/add', 'Shared\ProfileController@addProfilePasangan')->name('pimpinan_profilepasangan_add');
    Route::post('/pimpinan/profile/data-anak/add', 'Shared\ProfileController@addProfileAnak')->name('pimpinan_profileanak_add');

    Route::patch('/pimpinan/profile/data-pribadi/update/{id}', 'Shared\ProfileController@updateProfilePribadi')->name('kepaladepartemen_profile_update');
    Route::patch('/pimpinan/profile/data-gerejawi/update/{id}', 'Shared\ProfileController@updateProfileGerejawi')->name('kepaladepartemen_profilegerejawi_update');
    Route::patch('/pimpinan/profile/data-formal/update/{id}', 'Shared\ProfileController@updateProfileFormal')->name('kepaladepartemen_profileformal_update');
    Route::patch('/pimpinan/profile/data-informal/update/{id}', 'Shared\ProfileController@updateProfileInformal')->name('kepaladepartemen_profileinformal_update');
    Route::patch('/pimpinan/profile/data-pasangan/update/{id}', 'Shared\ProfileController@updateProfilePasangan')->name('kepaladepartemen_profilepasangan_update');
    Route::patch('/pimpinan/profile/data-anak/update/{id}', 'Shared\ProfileController@updateProfileAnak')->name('kepaladepartemen_profileanak_update');
});

//Kepala Departemen
Route::middleware('isKepalaDepartemen')->group(function () {
    Route::get('/kepaladepartemen/dokumen', 'Shared\DokumenController@dokumen')->name('kepaladepartemen_dokumen');
    Route::get('/kepaladepartemen/dokumen/{id}', 'Shared\DokumenController@getDokumenById')->name('kepaladepartemen_dokumen_id');
    Route::post('/kepaladepartemen/dokumen/addDokumen', 'Shared\DokumenController@addDokumen')->name('kepaladepartemen_addDokumen');

    Route::get('/kepaladepartemen/laporan', 'KepalaDepartemen\LaporanController@laporan')->name('kepaladepartemen_laporan');
    Route::get('/kepaladepartemen/evaluasi', 'KepalaDepartemen\EvaluasiController@evaluasi')->name('kepaladepartemen_evaluasi');

    Route::get('/kepaladepartemen/profile/data-pribadi', 'Shared\ProfileController@profilePribadi')->name('kepaladepartemen_profile');
    Route::get('/kepaladepartemen/profile/data-gerejawi', 'Shared\ProfileController@profileGerejawi')->name('kepaladepartemen_profilegerejawi');
    Route::get('/kepaladepartemen/profile/data-formal', 'Shared\ProfileController@profileFormal')->name('kepaladepartemen_profileformal');
    Route::get('/kepaladepartemen/profile/data-informal', 'Shared\ProfileController@profileInformal')->name('kepaladepartemen_profileinformal');
    Route::get('/kepaladepartemen/profile/data-pasangan', 'Shared\ProfileController@profilePasangan')->name('kepaladepartemen_profilepasangan');
    Route::get('/kepaladepartemen/profile/data-anak', 'Shared\ProfileController@profileAnak')->name('kepaladepartemen_profileanak');

    Route::post('/kepaladepartemen/profile/data-pribadi/add', 'Shared\ProfileController@addProfilePribadi')->name('kepaladepartemen_profile_add');
    Route::post('/kepaladepartemen/profile/data-gerejawi/add', 'Shared\ProfileController@addProfileGerejawi')->name('kepaladepartemen_profilegerejawi_add');
    Route::post('/kepaladepartemen/profile/data-formal/add', 'Shared\ProfileController@addProfileFormal')->name('kepaladepartemen_profileformal_add');
    Route::post('/kepaladepartemen/profile/data-informal/add', 'Shared\ProfileController@addProfileInformal')->name('kepaladepartemen_profileinformal_add');
    Route::post('/kepaladepartemen/profile/data-pasangan/add', 'Shared\ProfileController@addProfilePasangan')->name('kepaladepartemen_profilepasangan_add');
    Route::post('/kepaladepartemen/profile/data-anak/add', 'Shared\ProfileController@addProfileAnak')->name('kepaladepartemen_profileanak_add');

    Route::patch('/kepaladepartemen/profile/data-pribadi/update/{id}', 'Shared\ProfileController@updateProfilePribadi')->name('kepaladepartemen_profile_update');
    Route::patch('/kepaladepartemen/profile/data-gerejawi/update/{id}', 'Shared\ProfileController@updateProfileGerejawi')->name('kepaladepartemen_profilegerejawi_update');
    Route::patch('/kepaladepartemen/profile/data-formal/update/{id}', 'Shared\ProfileController@updateProfileFormal')->name('kepaladepartemen_profileformal_update');
    Route::patch('/kepaladepartemen/profile/data-informal/update/{id}', 'Shared\ProfileController@updateProfileInformal')->name('kepaladepartemen_profileinformal_update');
    Route::patch('/kepaladepartemen/profile/data-pasangan/update/{id}', 'Shared\ProfileController@updateProfilePasangan')->name('kepaladepartemen_profilepasangan_update');
    Route::patch('/kepaladepartemen/profile/data-anak/update/{id}', 'Shared\ProfileController@updateProfileAnak')->name('kepaladepartemen_profileanak_update');

});

//pelayan
Route::middleware('isPelayan')->group(function () {
    Route::get('/pelayan/dokumen', 'Shared\DokumenController@dokumen')->name('pelayan_dokumen');
    Route::get('/pelayan/dokumen/{id}', 'Shared\DokumenController@getDokumenById')->name('pelayan_dokumen_id');

    Route::get('/pelayan/evaluasi', 'Pelayan\EvaluasiController@evaluasi')->name('pelayan_evaluasi');
    Route::get('/pelayan/laporan', 'Pelayan\LaporanController@laporan')->name('pelayan_laporan');

    Route::get('/pelayan/profile/data-pribadi', 'Shared\ProfileController@profilePribadi')->name('pelayan_profile');
    Route::get('/pelayan/profile/data-gerejawi', 'Shared\ProfileController@profileGerejawi')->name('pelayan_profilegerejawi');
    Route::get('/pelayan/profile/data-formal', 'Shared\ProfileController@profileFormal')->name('pelayan_profileformal');
    Route::get('/pelayan/profile/data-informal', 'Shared\ProfileController@profileInformal')->name('pelayan_profileinformal');
    Route::get('/pelayan/profile/data-pasangan', 'Shared\ProfileController@profilePasangan')->name('pelayan_profilepasangan');
    Route::get('/pelayan/profile/data-anak', 'Shared\ProfileController@profileAnak')->name('pelayan_profileanak');
    
    Route::post('/pelayan/profile/data-pribadi/add', 'Shared\ProfileController@addProfilePribadi')->name('pelayan_profile_add');
    Route::post('/pelayan/profile/data-gerejawi/add', 'Shared\ProfileController@addProfileGerejawi')->name('pelayan_profilegerejawi_add');
    Route::post('/pelayan/profile/data-formal/add', 'Shared\ProfileController@addProfileFormal')->name('pelayan_profileformal_add');
    Route::post('/pelayan/profile/data-informal/add', 'Shared\ProfileController@addProfileInformal')->name('pelayan_profileinformal_add');
    Route::post('/pelayan/profile/data-pasangan/add', 'Shared\ProfileController@addProfilePasangan')->name('pelayan_profilepasangan_add');
    Route::post('/pelayan/profile/data-anak/add', 'Shared\ProfileController@addProfileAnak')->name('pelayan_profileanak_add');

    Route::patch('/pelayan/profile/data-pribadi/update/{id}', 'Shared\ProfileController@updateProfilePribadi')->name('pelayan_profile_update');
    Route::patch('/pelayan/profile/data-gerejawi/update/{id}', 'Shared\ProfileController@updateProfileGerejawi')->name('pelayan_profilegerejawi_update');
    Route::patch('/pelayan/profile/data-formal/update/{id}', 'Shared\ProfileController@updateProfileFormal')->name('pelayan_profileformal_update');
    Route::patch('/pelayan/profile/data-informal/update/{id}', 'Shared\ProfileController@updateProfileInformal')->name('pelayan_profileinformal_update');
    Route::patch('/pelayan/profile/data-pasangan/update/{id}', 'Shared\ProfileController@updateProfilePasangan')->name('pelayan_profilepasangan_update');
    Route::patch('/pelayan/profile/data-anak/update/{id}', 'Shared\ProfileController@updateProfileAnak')->name('pelayan_profileanak_update');
});
