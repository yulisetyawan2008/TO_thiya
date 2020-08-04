<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toko;
use DB;

class TokoController extends Controller
{
    public function index(){
        $tokos = DB::table('tokos')->paginate(5);
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

    public function edit($id){
        $toko = Toko::find($id);
        return view('toko.edit', compact('toko'));
    }

    public function update($id, Request $request){
        $new_item = Toko::find($id);

        $new_item->nm_toko = $request->nm_toko;
        $new_item->almt_toko = $request->almt_toko;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/toko');
    }

    public function destroy($id){
        $toko = Toko::find($id);
        $toko->delete();
        return redirect('/toko');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $tokos = Toko::where('nm_toko', 'like', '%'.$search.'%')->paginate(5);
        return view('toko.index', compact('tokos'));
    }
}
