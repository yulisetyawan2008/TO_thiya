@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Identitas Bahan Baku</h2>
        </div>
        <div class="card-body">
           
            <div class="ml-3 mt-3">
                <table class="table table-bordere">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Produk</th>
                            <th>Jumlah Produk</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Nama Pembeli</th>
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
                            <td>{{$penjualan->nm_pelanggan}}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="3"></td>
                            <td>{{$jumlah}}</td>
                            <td></td>
                            <td></td>
                            <td>{{number_format($total,0)}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="/baku" class="btn btn-sm btn-primary">Kembali</a>
        </div>
    </div>
@endsection