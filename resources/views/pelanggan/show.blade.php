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
                <p>Daftar Produk yang dibeli:</p>
            </div>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Tanggal</th>
                            <th>Jumlah Produk</th>
                            <th>Satuan</th>
                            <th>Harga Produk</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penjualans as $penjualan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{date('d M Y', strtotime($penjualan->tanggal))}}</td>
                            <td>{{$penjualan->produk}}</td>
                            <td>{{$penjualan->jml_produk}}</td>
                            <td>{{$penjualan->satuan}}</td>
                            <td>{{number_format($penjualan->hrg_produk,0)}}</td>
                            <td>{{number_format($penjualan->ttl_hrg,0)}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"></td>
                            <td>{{$jumlah}}</td>
                            <td colspan="2"></td>
                            <td>{{number_format($total,0)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="/pelanggan" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection