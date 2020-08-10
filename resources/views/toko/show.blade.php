@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Toko</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$toko->id}}</p>
                <p>Nama Satuan : {{$toko->nm_toko}}</p>
                <p>Alamat Toko : {{$toko->almt_toko}}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="/toko" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection