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
Route::get('/baku/{id}/edit', 'BakuController@edit');
Route::put('/baku/{id}', 'BakuController@update');
Route::delete('/baku/{id}', 'BakuController@destroy');

Route::get('/satuan', 'SatuanController@index');
Route::get('/satuan/create', 'SatuanController@create');
Route::post('/satuan', 'SatuanController@store');
Route::get('/satuan/{id}/edit', 'SatuanController@edit');
Route::put('/satuan/{id}', 'SatuanController@update');
Route::delete('/satuan/{id}', 'SatuanController@destroy');
Route::get('/satuan/search', 'SatuanController@search');

Route::get('/toko', 'TokoController@index');
Route::get('/toko/create', 'TokoController@create');
Route::post('/toko', 'TokoController@store');
Route::get('/toko/{id}/edit', 'TokoController@edit');
Route::put('/toko/{id}', 'TokoController@update');
Route::delete('/toko/{id}', 'TokoController@destroy');
Route::get('/toko/search', 'TokoController@search');

Route::get('/barang', 'BarangController@index');
Route::get('/barang/create', 'BarangController@create');
Route::post('/barang', 'BarangController@store');
Route::get('/barang/{id}/edit', 'BarangController@edit');
Route::put('/barang/{id}', 'BarangController@update');
Route::delete('/barang/{id}', 'BarangController@destroy');
Route::get('/barang/search', 'BarangController@search');

Route::get('/produk', 'ProdukController@index');
Route::get('/produk/create', 'ProdukController@create');
Route::post('/produk', 'ProdukController@store');
Route::get('/produk/{id}/edit', 'ProdukController@edit');
Route::put('/produk/{id}', 'ProdukController@update');
Route::delete('/produk/{id}', 'ProdukController@destroy');
Route::get('/produk/search', 'ProdukController@search');

Route::get('/kurir', 'KurirController@index');
Route::get('/kurir/create', 'KurirController@create');
Route::post('/kurir', 'KurirController@store');
Route::get('/kurir/{id}/edit', 'KurirController@edit');
Route::put('/kurir/{id}', 'KurirController@update');
Route::delete('/kurir/{id}', 'KurirController@destroy');
Route::get('/kurir/search', 'KurirController@search');

Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/create', 'PelangganController@create');
Route::post('/pelanggan', 'PelangganController@store');
Route::get('/pelanggan/{id}/edit', 'PelangganController@edit');
Route::put('/pelanggan/{id}', 'PelangganController@update');
Route::delete('/pelanggan/{id}', 'PelangganController@destroy');
Route::get('/pelanggan/search', 'PelangganController@search');


Route::get('/penjualan', 'PenjualanController@index');
Route::get('/penjualan/create', 'PenjualanController@create');
Route::post('/penjualan', 'PenjualanController@store');
Route::get('/penjualan/{id}/edit', 'PenjualanController@edit');
Route::put('/penjualan/{id}', 'PenjualanController@update');
Route::delete('/penjualan/{id}', 'PenjualanController@destroy');

Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan/cari', 'LaporanController@cari');



