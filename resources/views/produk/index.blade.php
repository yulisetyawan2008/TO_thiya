@extends('layouts.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h2>Daftar Produk Ummu Haidar</h2>
        </div>
        <div class="card-body">
            <a href="/produk/create" class="btn btn-primary">Tambah Produk</a>
            <div class="ml-3 mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Spesifikasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produks as $produk)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$produk->produk}}</td>
                            <td>{{$produk->satuan->satuan}}</td>
                            <td>{{$produk->hrg_produk}}</td>
                            <td>{{$produk->spsf_produk}}</td>
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
    </div>
@endsection