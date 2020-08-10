@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Satuan</h2>
        </div>
        <div class="card-body">
            <div class="ml-3 mt-3">
                <p>Nomor Urut : {{$satuan->id}}</p>
                <p>Nama Satuan : {{$satuan->satuan}}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="/satuan" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection