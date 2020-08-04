<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaporanController extends Controller
{
    public function index(){
        return view('laporan.index');
    }

    public function cari(Request $request){
        $this->validate($request,[
            'dari'=>'required',
            'sampai'=>'required'
        ]);

        $dari = date('Y-m-d',strtotime($request->dari));
        
        $sampai = date('Y-m-d',strtotime($request->sampai));

        $bakus = DB::table('bakus')
                    ->join('barangs', 'bakus.barang_id', '=', 'barangs.id')
                    ->join('satuans', 'bakus.satuan_id', '=', 'satuans.id')
                    ->join('tokos', 'bakus.toko_id', '=', 'tokos.id')
                    ->whereBetween('tanggal', [$dari,$sampai])
                    ->get();
        $hrg_tot = DB::table('bakus')
                    ->join('barangs', 'bakus.barang_id', '=', 'barangs.id')
                    ->join('satuans', 'bakus.satuan_id', '=', 'satuans.id')
                    ->join('tokos', 'bakus.toko_id', '=', 'tokos.id')
                    ->whereBetween('tanggal', [$dari,$sampai])
                    ->sum('hrg_total');
        $penjualans = DB::table('penjualans')
                    ->join('produks', 'penjualans.produk_id', '=', 'produks.id')
                    ->join('satuans', 'penjualans.satuan_id', '=', 'satuans.id')
                    ->join('pelanggans', 'penjualans.pelanggan_id', '=', 'pelanggans.id')
                    ->whereBetween('tanggal', [$dari,$sampai])
                    ->get();
        $hrg_total = DB::table('penjualans')
                    ->join('produks', 'penjualans.produk_id', '=', 'produks.id')
                    ->join('satuans', 'penjualans.satuan_id', '=', 'satuans.id')
                    ->join('pelanggans', 'penjualans.pelanggan_id', '=', 'pelanggans.id')
                    ->whereBetween('tanggal', [$dari,$sampai])
                    ->sum('ttl_hrg');
        return view('laporan.index', compact('bakus', 'dari', 'sampai', 'hrg_tot', 'penjualans', 'hrg_total'));
    }
}
