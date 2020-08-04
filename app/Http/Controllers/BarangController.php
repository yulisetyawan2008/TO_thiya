<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use DB;

class BarangController extends Controller
{
    public function index(){
        $barangs = DB::table('barangs')->paginate(5);
        return view('barang.index', compact('barangs'));
    }

    public function create(){
        return view('barang.form');
    }

    public function store(Request $request){
        $new_barang = new Barang;

        $new_barang->nm_barang = $request->nm_barang;
        $new_barang->merk = $request->merk;
        $new_barang->spsf_barang = $request->spsf_barang;
        $new_barang->created_at = $request->created_at;
        $new_barang->updated_at = $request->updated_at;

        $new_barang->save();

        return redirect('/barang')->with('create', 'Barang berhasil ditambahkan');

    }

    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    public function update($id, Request $request){
        $new_item = Barang::find($id);

        $new_item->nm_barang = $request->nm_barang;
        $new_item->spsf_barang = $request->spsf_barang;
        $new_item->merk = $request->merk;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/barang');
    }

    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $barangs = Barang::where('nm_barang', 'like', '%'.$search.'%')->paginate(5);
        return view('barang.index', compact('barangs'));
    }
}
