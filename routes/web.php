<?php

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
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/user', 'UserController');
Route::resource('/admin', 'AdminController');
Route::resource('/kepsek', 'KepsekController');
Route::resource('/siswa', 'SiswaController');
Route::resource('/jurusan', 'JurusanController');
Route::resource('/kelas', 'KelasController');
Route::resource('/jenis-pembayaran', 'JenisPembayaranController');
Route::resource('/nominal-pembayaran', 'NominalPembayaranController');
Route::resource('/nominal-spp', 'NominalSppController');

Route::get('/pembayaran-spp', 'PembayaranSppController@index');
Route::post('/pembayaran-spp/create', 'PembayaranSppController@create');
Route::get('/pembayaran-spp/{id}/destroy', 'PembayaranSppController@destroy');
Route::get('/pembayaran-spp/cariSiswaKelas/{id}','PembayaranSppController@cariSiswaKelas');
Route::get('/pembayaran-spp/cariKelas/{id}','PembayaranSppController@cariKelas');
Route::get('/pembayaran-spp/cariNominal/{id}','PembayaranSppController@cariNominal');
Auth::routes();