<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use App\Toko;
use App\Baku;
use App\Barang;
use DB;

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
        $barangs = Barang::all();
        // dd($satuans);
        return view('baku.form', compact('satuans', 'tokos', 'barangs'));
    }

    public function store(Request $request){
        $new_baku = new Baku;

        $new_baku->tanggal = date('Y-m-d',strtotime($request->tanggal));
        $new_baku->barang_id = $request->barang_id;
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

    public function edit($id){
        $baku = Baku::find($id);
        $barangs = Barang::all();
        $satuans = Satuan::all();
        $tokos = Toko::all();
        return view('baku.edit', compact('baku', 'barangs', 'satuans', 'tokos'));
    }

    public function update($id, Request $request){
        $new_baku = Baku::find($id);

        $new_baku->tanggal = date('Y-m-d',strtotime($request->tanggal));
        $new_baku->barang_id = $request->barang_id;
        $new_baku->jml_barang = $request->jml_barang;
        $new_baku->satuan_id = $request->satuan_id;
        $new_baku->hrg_barang = $request->hrg_barang;
        $new_baku->hrg_total = $request->hrg_total;
        $new_baku->toko_id = $request->toko_id;
        $new_baku->created_at = $request->created_at;
        $new_baku->updated_at = $request->updated_at;

        $new_baku->save();

        return redirect('/baku');
    }

    public function show($barang_id){
        $bakus = DB::table('bakus')
                        ->join('barangs', 'bakus.barang_id', '=', 'barangs.id')
                        ->join('satuans', 'bakus.satuan_id', '=', 'satuans.id')
                        ->join('tokos', 'bakus.toko_id', '=', 'tokos.id')
                        ->where('barang_id', '=', $barang_id)
                        ->get();
        $total = DB::table('bakus')
                        ->join('barangs', 'bakus.barang_id', '=', 'barangs.id')
                        ->join('satuans', 'bakus.satuan_id', '=', 'satuans.id')
                        ->join('tokos', 'bakus.toko_id', '=', 'tokos.id')
                        ->where('barang_id', '=', $barang_id)
                        ->sum('hrg_total');
        $jumlah = DB::table('bakus')
                        ->join('barangs', 'bakus.barang_id', '=', 'barangs.id')
                        ->join('satuans', 'bakus.satuan_id', '=', 'satuans.id')
                        ->join('tokos', 'bakus.toko_id', '=', 'tokos.id')
                        ->where('barang_id', '=', $barang_id)
                        ->sum('jml_barang');
        // dd($bakus);
        $barang = DB::table('barangs')->where('id', '=', $barang_id)->get();
        // dd($barang);
        return view('baku.show', compact('bakus', 'barang', 'total', 'jumlah'));
    }

    public function destroy($id){
        $baku = Baku::find($id);
        $baku->delete();
        return redirect('/baku');
    }
        
}
