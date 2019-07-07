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
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route PMI
Route::get('/dashboard-pmi', 'PMI\dashboardAdminController@index');

Route::get('/upload-rencana', 'PMI\uploadRencanaController@index');
Route::post('/upload-rencana', 'PMI\uploadRencanaController@store');
Route::get('/download-rencana/{filename}', 'PMI\daftarRencanaController@download');

Route::get('/rekomendasi-tim/{id}', 'PMI\rekomendasiTimController@index');

Route::get('/daftar-tim', 'PMI\daftarTimController@index');
Route::get('/bentuk-tim', 'PMI\bentukTimController@index');

Route::get('/daftar-rencana', 'PMI\daftarRencanaController@index');
Route::get('/laporan','PMI\LaporanController@index');

//Route RHA
Route::get('dashboard-rha','rha\dashboardRhaController@index');
Route::get('download-laporan','rha\downloadLaporanController@index');
Route::get('upload-laporan','rha\uploadLaporanController@index');

Route::post('/upload-laporan', 'rha\uploadLaporanController@store');
Route::get('/riwayat-laporan', 'rha\riwayatLaporanController@index');

//Route Login pmi
Route::group(['prefix' => 'pmi', 'middleware' => ['auth','role:pmi']], function(){
	Route::get('/dashboard-pmi', 'PMI\dashboardAdminController@index');
});

Route::group(['prefix' => 'rha', 'middleware' => ['auth','role:rha']], function(){
	Route::get('dashboard-rha','rha\dashboardRhaController@index');
});