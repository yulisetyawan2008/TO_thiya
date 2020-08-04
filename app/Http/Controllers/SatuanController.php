<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use \Carbon\Carbon;
use DB;

class SatuanController extends Controller
{
    public function index(){
        $satuans = DB::table('satuans')->paginate(5);
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

    public function edit($id){
        $satuan = Satuan::find($id);
        return view('satuan.edit', compact('satuan'));
    }

    public function update($id, Request $request){
        $new_item = Satuan::find($id);

        $new_item->satuan = $request->satuan;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/satuan');
    }

    public function destroy($id){
        $satuan = Satuan::find($id);
        $satuan->delete();
        return redirect('/satuan');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $satuans = Satuan::where('satuan', 'like', '%'.$search.'%')->paginate(5);
        return view('satuan.index', compact('satuans'));
    }
}
