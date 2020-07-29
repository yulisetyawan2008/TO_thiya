<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;

class KurirController extends Controller
{
    public function index(){
        $kurirs = Kurir::all();
        return view('kurir.index', compact('kurirs'));
    }

    public function create(){
        return view('kurir.form');
    }

    public function store(Request $request){
        $new_kurir = new Kurir;

        $new_kurir->nm_kurir = $request->nm_kurir;
        $new_kurir->noHp_kurir = $request->noHp_kurir;
        $new_kurir->created_at = $request->created_at;
        $new_kurir->updated_at = $request->updated_at;

        $new_kurir->save();

        return redirect('/kurir');

    }
}
