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

Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::get('/beranda' , 'BerandaController@index');

Route::get('/baku', 'BakuController@index');
Route::get('/baku/create', 'BakuController@create');
Route::post('baku/', 'BakuController@store');

Route::get('/satuan', 'SatuanController@index');
Route::get('/satuan/create', 'SatuanController@create');
Route::post('/satuan', 'SatuanController@store');

Route::get('/toko', 'TokoController@index');
Route::get('/toko/create', 'TokoController@create');
Route::post('/toko', 'TokoController@store');

Route::get('/barang', 'BarangController@index');
Route::get('/barang/create', 'BarangController@create');
Route::post('/barang', 'BarangController@store');

Route::get('/produk', 'ProdukController@index');
Route::get('/produk/create', 'ProdukController@create');
Route::post('/produk', 'ProdukController@store');

Route::get('/kurir', 'KurirController@index');
Route::get('/kurir/create', 'KurirController@create');
Route::post('/kurir', 'KurirController@store');

Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/create', 'PelangganController@create');
Route::post('/pelanggan', 'PelangganController@store');

Route::get('/penjualan', 'PenjualanController@index');
Route::get('/penjualan/create', 'PenjualanController@create');
Route::post('/penjualan', 'PenjualanController@store');



