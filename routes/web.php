<?php
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\HomeController;
use App\SuratKeluar;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/login', 'LoginController@login');


///Surat Masuk///
Route::get('/masuk/create', 'SuratMasukController@create')->name('masuk'); 
Route::post('/masuk/store', 'SuratMasukController@store')->name('createmasuk'); //create
Route::get('/suratmasuk', 'SuratMasukController@index')->name('in'); //read
Route::get('/editmasuk', 'AdminController@editmasuk');
route::get('/masuk/{id}/edit', 'SuratMasukController@edit')->name('masukedit');
route::post('/masuk/update/{id}', 'SuratMasukController@update')->name('masukupdate');
route::get('/masuk/{id}/delete', 'SuratMasukController@destroy')->name('hapusmasuk');
Route::get('/cari', 'SuratMasukController@cari')->name('cari'); //search
Route::post('/date', 'SuratMasukController@date')->name('date'); //date to date

///Surat Keluar///
Route::get('/keluar/create', 'SuratKeluarController@create')->name('keluar');
Route::post('/keluar/store', 'SuratKeluarController@store')->name('createkeluar'); //create
Route::get('/suratkeluar', 'SuratKeluarController@index')->name('out'); ///read
Route::get('/editkeluar', 'SuratKeluarController@editkeluar');
route::get('/keluar/{id}/edit', 'SuratKeluarController@edit')->name('keluaredit');
route::post('/keluar/update/{id}', 'SuratKeluarController@update')->name('keluarupdate');
route::get('/keluar/{id}/delete', 'SuratKeluarController@destroy')->name('hapuskeluar');
Route::get('/carikel', 'SuratKeluarController@carikel')->name('carikel'); //search

///Data User///
Route::get('/user/create', 'DataUserController@create')->name('user');
Route::post('/user/store', 'DataUserController@store')->name('createuser'); //create
Route::get('/datauser', 'DataUserController@index')->name('datauser'); //read
Route::get('/edituser', 'DataUserController@edituser');
route::get('/user/{id}/edit', 'DataUserController@edituser')->name('useredit');
route::post('/user/update/{id}', 'DataUserController@update')->name('userupdate');
route::get('/user/{id}/delete', 'DataUserController@destroy')->name('hapususer');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');