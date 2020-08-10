@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Identitas Barang</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$barang->id}}</p>
                <p>Nama Barang : {{$barang->nm_barang}}</p>
                <p>Merk Barang : {{$barang->merk}}</p>
                <p>Spesifikasi Barang : {{$barang->spsf_barang}}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="/barang" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection