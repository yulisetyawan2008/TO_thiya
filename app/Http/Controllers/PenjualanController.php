<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Satuan;
use App\Pelanggan;
use App\Kurir;
use App\Produk;

class PenjualanController extends Controller
{
    public function index(){
        $penjualans = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    public function create(){
        $produks = Produk::all();
        $satuans = Satuan::all();
        $pelanggans = Pelanggan::all();
        $kurirs = Kurir::all();
        
        return view('penjualan.form', compact('produks', 'satuans', 'pelanggans', 'kurirs'));
    }

    public function store(Request $request){
        $new_item = new Penjualan;

        $new_item->tanggal = date('Y-m-d',strtotime($request->tanggal));
        $new_item->produk_id = $request->produk_id;
        $new_item->jml_produk = $request->jml_produk;
        $new_item->satuan_id = $request->satuan_id;
        $new_item->hrg_produk = $request->hrg_produk;
        $new_item->ttl_hrg = $request->ttl_hrg;
        $new_item->pelanggan_id = $request->pelanggan_id;
        $new_item->kurir_id = $request->kurir_id;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/penjualan');

    }

    public function edit($id){
        $penjualan = Penjualan::find($id);
        $produks = Produk::all();
        $satuans = Satuan::all();
        $pelanggans = Pelanggan::all();
        $kurirs = Kurir::all();
        return view('penjualan.edit', compact('penjualan', 'kurirs', 'produks', 'satuans', 'pelanggans'));
    }

    public function update($id, Request $request){
        $new_item = Penjualan::find($id);

        $new_item->tanggal = date('Y-m-d',strtotime($request->tanggal));
        $new_item->produk_id = $request->produk_id;
        $new_item->jml_produk = $request->jml_produk;
        $new_item->satuan_id = $request->satuan_id;
        $new_item->hrg_produk = $request->hrg_produk;
        $new_item->ttl_hrg = $request->ttl_hrg;
        $new_item->pelanggan_id = $request->pelanggan_id;
        $new_item->kurir_id = $request->kurir_id;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/penjualan');
    }

    public function destroy($id){
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
}
