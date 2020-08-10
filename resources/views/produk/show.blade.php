@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Identitas Produk</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$produk->id}}</p>
                <p>Nama Produk : {{$produk->produk}}</p>
                <p>Satuan Produk : {{$produk->satuan->satuan}}</p>
                <p>Harga Produk : {{number_format($produk->hrg_produk,0)}}</p>
                <p>Spesifikasi Produk : {{$produk->spsf_produk}}</p>
                
            </div>
        </div>
        <div class="card-footer">
            <a href="/produk" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection