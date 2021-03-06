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
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Satuan</th>
                            <th>Harga Satuan</th>
                            <th>Harga Total</th>
                            <th>Nama Toko</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bakus as $baku)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$baku->tanggal}}</td>
                            <td>{{$baku->nm_barang}}</td>
                            <td>{{$baku->jml_barang}}</td>
                            <td>{{$baku->satuan}}</td>
                            <td>{{number_format($baku->hrg_barang,0)}}</td>
                            <td>{{number_format($baku->hrg_total,0)}}</td>
                            <td>{{$baku->nm_toko}}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="3"></td>
                            <td>{{$jumlah}}</td>
                            <td></td>
                            <td></td>
                            <td>{{number_format($total,0)}}</td>
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