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
Route::get('/proyek', function () {
    return view('proyek');
});
Route::get('/proyek/create', function () {
    return view('create');
});
Route::get('/proyek/{id}/daftarkan-staff', function () {
    return view('daftarkan-staff');
});
Route::get('/proyek/{id}/edit', function () {
    return view('edit');
});
Route::get('/proyek/{id}', function () {
    return view('id');
});
Route::get('/karyawan', function () {
    return view('karyawan');
});
Route::get('/karyawan/{id_karyawan}/daftar-proyek', function () {
    return view('daftar-proyek');
});

Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id