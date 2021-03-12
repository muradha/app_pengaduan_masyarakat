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
    return view('layouts.main_template');
});

Route::get('/masyarakat', 'MasyarakatController@index');
Route::get('/masyarakat/create', 'MasyarakatController@create');
Route::post('/masyarakat/save', 'MasyarakatController@insert');
Route::delete('/masyarakat/delete', 'MasyarakatController@delete');
Route::get('/masyarakat/edit/{id}', 'MasyarakatController@edit');


Route::get('/petugas', 'PetugasController@index');
Route::get('/petugas/create', 'PetugasController@create');
Route::post('/petugas/save', 'PetugasController@insert');
Route::delete('/petugas/delete', 'PetugasController@delete');



Route::get('/pengaduan', 'PengaduanController@index');
Route::get('/pengaduan/create', 'PengaduanController@create');
Route::get('/tanggapan', 'TanggapanController@index');
