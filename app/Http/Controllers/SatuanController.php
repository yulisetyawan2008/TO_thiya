<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use \Carbon\Carbon;

class SatuanController extends Controller
{
    public function index(){
        $satuans = Satuan::all();
        return view('satuan.index', compact('satuans'));
    }

    public function create(){
        return view('satuan.form');
    }

    public function store(Request $request){

        $new_satuan = new Satuan;

        $new_satuan->satuan = $request->satuan;
        $new_satuan->created_at = $request->created_at;
        $new_satuan->updated_at = $request->updated_at;

        $new_satuan->save();

        return redirect('/satuan')->with('create', 'satuan telah dibuat');
    }
}
