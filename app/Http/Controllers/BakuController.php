<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use App\Toko;
use App\Baku;

class BakuController extends Controller
{
    public function index(){
        // $satuans = Satuan::all();
        // $tokos = Toko::all();
        $bakus = Baku::all();
        // dd($tokos);
        return view('baku.index', compact('bakus'));
    }

    public function create(){
        $satuans = Satuan::all();
        $tokos = Toko::all();
        // dd($satuans);
        return view('baku.form', compact('satuans', 'tokos'));
    }

    public function store(Request $request){
        $new_baku = new Baku;

        $new_baku->nm_barang = $request->nm_barang;
        $new_baku->jml_barang = $request->jml_barang;
        $new_baku->satuan_id = $request->satuan_id;
        $new_baku->hrg_barang = $request->hrg_barang;
        $new_baku->hrg_total = $request->hrg_total;
        $new_baku->toko_id = $request->toko_id;
        $new_baku->created_at = $request->created_at;
        $new_baku->updated_at = $request->updated_at;

        $new_baku->save();

        return redirect('/baku')->with('create', 'Pembelian bahan baku telah ditambahkan');
    }
}
