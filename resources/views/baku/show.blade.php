@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Identitas Bahan Baku</h2>
        </div>
        <div class="card-body">
           @foreach($bakus as $baku)
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$baku->barang_id}}</p>
                <p>Nama Barang : {{$bakus->nm_barang}}</p>
                <p>Merk Barang : {{$bakus->merk}}</p>
                
            </div>
            @endforeach
        </div>
        <div class="card-footer">
            <a href="/barang" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection