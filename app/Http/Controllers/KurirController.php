<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;
use DB;

class KurirController extends Controller
{
    public function index(){
        $kurirs = DB::table('kurirs')->paginate(5);
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

    public function edit($id){
        $kurir = Kurir::find($id);
        return view('kurir.edit', compact('kurir'));
    }

    public function update($id, Request $request){
        $new_item = Kurir::find($id);

        $new_item->nm_kurir = $request->nm_kurir;
        $new_item->noHp_kurir = $request->noHp_kurir;
        $new_item->created_at = $request->created_at;
        $new_item->updated_at = $request->updated_at;

        $new_item->save();

        return redirect('/kurir');
    }

    public function show($id){
        $kurir = Kurir::find($id);
        return view('kurir.show', compact('kurir'));
    }

    public function destroy($id){
        $kurir = Kurir::find($id);
        $kurir->delete();
        return redirect('/kurir');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $kurirs = Kurir::where('nm_kurir', 'like', '%'.$search.'%')->paginate(5);
        return view('kurir.index', compact('kurirs'));
    }
}
