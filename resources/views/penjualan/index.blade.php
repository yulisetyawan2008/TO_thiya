@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h2>Daftar Penjualan</h2>
            </div>
            <div class="card-body">
                <a href="/penjualan/create" class="btn btn-primary">Tambah Penjualan</a>
                <div class="ml-3 mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Produk</th>
                                <th>Satuan</th>
                                <th>Harga Produk</th>
                                <th>Total Harga Produk</th>
                                <th>Nama Pelanggan</th>
                                <th>Nama Kurir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penjualans as $penjualan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$penjualan->tanggal}}</td>
                                <td>{{$penjualan->produk->produk}}</td>
                                <td>{{$penjualan->jml_produk}}</td>
                                <td>{{$penjualan->satuan->satuan}}</td>
                                <td>{{number_format($penjualan->hrg_produk,0)}}</td>
                                <td>{{number_format($penjualan->ttl_hrg,0)}}</td>
                                <td>{{$penjualan->pelanggan->nm_pelanggan}}</td>
                                <td>{{$penjualan->kurir->nm_kurir}}</td>
                                <td>
                                    <a href="/penjualan/{{$penjualan->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/penjualan/{{$penjualan->produk_id}}" class="btn btn-sm btn-success">Show</a>
                                    <form action="/penjualan/{{$penjualan->id}}" method="POST" style="display: inline">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection