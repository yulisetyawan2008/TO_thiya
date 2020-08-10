<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use App\Produk;


class ProdukController extends Controller
{
    public function index(){
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    public function create(){
        $satuans = Satuan::all();
        return view('produk.form', compact('satuans'));
    }

    public function store(Request $request){
        $new_produk = new Produk;

        $new_produk->produk = $request->produk;
        $new_produk->satuan_id = $request->satuan_id;
        $new_produk->spsf_produk = $request->spsf_produk;
        $new_produk->hrg_produk = $request->hrg_produk;
        $new_produk->created_at = $request->created_at;
        $new_produk->updated_at = $request->updated_at;

        $new_produk->save();

        return redirect('/produk')->with('create', 'Produk berhasil ditambahkan');
    }

    public function edit($id){
        $produk = Produk::find($id);
        $satuans = Satuan::get();
        return view('produk.edit', compact('produk', 'satuans'));
    }

    public function update($id, Request $request){
        $new_produk = Produk::find($id);

        $new_produk->produk = $request->produk;
        $new_produk->satuan_id = $request->satuan_id;
        $new_produk->spsf_produk = $request->spsf_produk;
        $new_produk->hrg_produk = $request->hrg_produk;
        $new_produk->created_at = $request->created_at;
        $new_produk->updated_at = $request->updated_at;

        $new_produk->save();

        return redirect('/produk');
    }

    public function show($id){
        $produk = Produk::find($id);
        return view('produk.show', compact('produk'));
    }

    public function destroy($id){
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }

  
}
