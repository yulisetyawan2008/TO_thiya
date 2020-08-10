@extends('layouts.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h2>Daftar Produk Ummu Haidar</h2>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/produk/create" class="btn btn-primary">Tambah Produk</a>
                    </div>
                    <div class="col-md-2">
                        <a href="/produk/pdf" class="btn btn-primary">Cetak Pdf</a>
                    </div>
                    <div class="col-md-2">
                        <a href="/produk/excel" class="btn btn-primary">Cetak Excel</a>
                    </div>
                    <div class="col-md-5">
                        <form action="/produk/search" method="get">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control">
                                <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

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
                                <a href="/produk/{{$produk->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/produk/{{$produk->id}}" class="btn btn-sm btn-success">Show</a>
                                <form action="/produk/{{$produk->id}}" method="POST" style="display: inline">
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