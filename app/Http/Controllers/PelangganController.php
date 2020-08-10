<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;

class PelangganController extends Controller
{
    public function index(){
        $pelanggans = DB::table('pelanggans')->paginate(5);
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create(){
        return view('pelanggan.form');
    }

    public function store(Request $request){
        // dd($request);
        $new_pelanggan = new Pelanggan;

        $new_pelanggan->nm_pelanggan = $request->nm_pelanggan;
        $new_pelanggan->noHp_pelanggan = $request->noHp_pelanggan;
        $new_pelanggan->almt_pelanggan = $request->almt_pelanggan;
        $new_pelanggan->created_at = $request->created_at;
        $new_pelanggan->updated_at = $request->updated_at;

        $new_pelanggan->save();

        return redirect('/pelanggan');
    }

    public function edit($id){
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update($id, Request $request){
        $new_item = Pelanggan::find($id);

        $new_item->nm_pelanggan = $request->nm_pelanggan;
        $new_item->noHp_pelanggan = $request->noHp_pelanggan;
        $new_item->almt_pelanggan = $request->almt_pelanggan;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/pelanggan');
    }

    public function show($id){
        $pelanggan = Pelanggan::find($id);
        $penjualans = DB::table('penjualans')
                           ->join('produks', 'penjualans.produk_id', '=', 'produks.id')
                           ->join('satuans', 'penjualans.satuan_id', '=', 'satuans.id')
                           ->where('pelanggan_id', '=', $id)
                           ->get();
        $total = DB::table('penjualans')
                           ->join('produks', 'penjualans.produk_id', '=', 'produks.id')
                           ->join('satuans', 'penjualans.satuan_id', '=', 'satuans.id')
                           ->where('pelanggan_id', '=', $id)
                           ->sum('ttl_hrg');
        $jumlah = DB::table('penjualans')
                           ->join('produks', 'penjualans.produk_id', '=', 'produks.id')
                           ->join('satuans', 'penjualans.satuan_id', '=', 'satuans.id')
                           ->where('pelanggan_id', '=', $id)
                           ->sum('jml_produk');
        return view('pelanggan.show', compact('pelanggan', 'penjualans', 'total', 'jumlah'));
    }

    public function destroy($id){
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('/pelanggan');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $pelanggans = Pelanggan::where('nm_pelanggan', 'like', '%'.$search.'%')->paginate(5);
        return view('pelanggan.index', compact('pelanggans'));
    }
}
