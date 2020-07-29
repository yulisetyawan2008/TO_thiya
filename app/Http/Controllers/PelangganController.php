<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        $pelanggans = Pelanggan::all();
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
}
