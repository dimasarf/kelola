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

Route::get('/rekomendasi-tim', 'PMI\rekomendasiTimController@index');
Route::get('/daftar-tim', 'PMI\daftarTimController@index');
Route::get('/bentuk-tim', 'PMI\bentukTimController@index');
Route::get('/daftar-rencana', 'PMI\daftarRencanaController@index');

//Route RHA
