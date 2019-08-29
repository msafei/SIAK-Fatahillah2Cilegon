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

Route::resource('/nominal-lain', 'NominalLainController');
Route::resource('/nominal-spp', 'NominalSppController');

Route::get('/pembayaran-spp', 'PembayaranSppController@index');
Route::post('/pembayaran-spp/{id}/update', 'PembayaranSppController@update');
Route::post('/pembayaran-spp/create', 'PembayaranSppController@create');
Route::get('/pembayaran-spp/{id}/bayar', 'PembayaranSppController@bayar');
Route::get('/pembayaran-spp/{id}/destroy', 'PembayaranSppController@destroy');
Route::get('/pembayaran-spp/cariSiswaKelas/{id}','PembayaranSppController@cariSiswaKelas');
Route::get('/pembayaran-spp/cariKelas/{id}','PembayaranSppController@cariKelas');
Route::get('/pembayaran-spp/cariNominal/{id}','PembayaranSppController@cariNominal');
Route::get('/pembayaran-spp/{id}/print', 'PembayaranSppController@print');


Route::get('/pembayaran-lain', 'PembayaranLainController@index');
Route::post('/pembayaran-lain/{id}/update', 'PembayaranLainController@update');
Route::post('/pembayaran-lain/create', 'PembayaranLainController@create');
Route::get('/pembayaran-lain/{id}/bayar', 'PembayaranLainController@bayar');
Route::get('/pembayaran-lain/{id}/destroy', 'PembayaranLainController@destroy');
Route::get('/pembayaran-lain/cariSiswaKelas/{id}','PembayaranLainController@cariSiswaKelas');
Route::get('/pembayaran-lain/cariKelas/{id}','PembayaranLainController@cariKelas');
Route::get('/pembayaran-lain/cariPembayaran/{id}','PembayaranLainController@cariPembayaran');
Route::get('/pembayaran-lain/cariNominal/{id}','PembayaranLainController@cariNominal');
Route::get('/pembayaran-lain/{id}/print', 'PembayaranLainController@print');

Route::get('/laporan', 'LaporanController@index');

Route::get('/pengeluaran', 'PengeluaranController@index');
Route::post('/pengeluaran/create', 'PengeluaranController@create');
Route::post('/pengeluaran/{id}/diterima', 'PengeluaranController@diterima');
Route::post('/pengeluaran/{id}/ditolak', 'PengeluaranController@ditolak');


Auth::routes();