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
                    ->whereBetween('created_at', [$dari,$sampai])
                    ->get();
    }
}
