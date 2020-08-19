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
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penjualans as $penjualan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$penjualan->produk}}</td>
                            <td>{{$penjualan->nm_pelanggan}}</td>
                            <td>{{$penjualan->almt_pelanggan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="/kurir" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection