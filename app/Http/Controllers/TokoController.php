<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;

class TokoController extends Controller
{
    public function index(){
        $tokos = Toko::all();
        return view('toko.index', compact('tokos'));
    }

    public function create(){
        return view('toko.form');
    }

    public function store(Request $request){
        $new_toko = new Toko;

        $new_toko->nm_toko = $request->nm_toko;
        $new_toko->almt_toko = $request->almt_toko;
        $new_toko->created_at = $request->created_at;
        $new_toko->updated_at = $request->updated_at;

        $new_toko->save();

        return redirect('/toko')->with('create', 'Toko telah ditambahkan');

    }
}
