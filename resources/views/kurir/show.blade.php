@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Identitas Kurir</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$kurir->id}}</p>
                <p>Nama Kurir : {{$kurir->nm_kurir}}</p>
                <p>Nomor HP : {{$kurir->noHp_kurir}}</p>
                
            </div>
        </div>
        <div class="card-footer">
            <a href="/kurir" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection