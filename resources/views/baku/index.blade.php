@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
        <h2>Daftar Harga Bahan Baku</h2>
        </div>
        <div class="card-body">
        <a href="/baku/create" class="btn btn-sm btn-primary mb-3">Tambah Bahan Baku</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Harga Total</th>
                    <th>Nama Toko</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bakus as $baku)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$baku->nm_barang}}</td>
                    <td>{{$baku->jml_barang}}</td>
                    <td>{{$baku->satuan->satuan}}</td>
                    <td>{{$baku->hrg_barang}}</td>
                    <td>{{$baku->hrg_total}}</td>
                    <td>{{$baku->toko->nm_toko}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <form action="#" method="POST" style="display: inline">
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

@endsection