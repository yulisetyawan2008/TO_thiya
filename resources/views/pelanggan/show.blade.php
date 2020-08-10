@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Identitas Pelanggan</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$pelanggan->id}}</p>
                <p>Nama Kurir : {{$pelanggan->nm_pelanggan}}</p>
                <p>Alamat : {{$pelanggan->almt_pelanggan}}</p>
                
            </div>
        </div>
        <div class="card-footer">
            <a href="/pelanggan" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection