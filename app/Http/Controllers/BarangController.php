<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::all();
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
}
