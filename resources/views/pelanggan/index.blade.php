@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h2>Daftar Nama Pelanggan</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/pelanggan/create" class="btn btn-primary">Tambah Pelanggan</a>
                    </div>
                    <div class="col-md-2">
                        <a href="/pelanggan/pdf" class="btn btn-primary">Cetak Pdf</a>
                    </div>
                    <div class="col-md-2">
                        <a href="/pelanggan/excel" class="btn btn-primary">Cetak Excel</a>
                    </div>
                    <div class="col-md-5">
                        <form action="/pelanggan/search" method="get">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control">
                                <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                Total pelanggan : {{$pelanggans->total()}}<br>
                Halaman : {{$pelanggans->currentPage()}} dari {{$pelanggans->lastPage()}} halaman
                
                <div class="ml-3 mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelanggans as $pelanggan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pelanggan->nm_pelanggan}}</td>
                                <td>{{$pelanggan->noHp_pelanggan}}</td>
                                <td>{{$pelanggan->almt_pelanggan}}</td>
                                <td>
                                    <a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/pelanggan/{{$pelanggan->id}}" class="btn btn-sm btn-success">Show</a>
                                    <form action="/pelanggan/{{$pelanggan->id}}" method="POST" style="display: inline">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$pelanggans->links()}}
                </div>
                
            </div>
        </div>
    </div>
@endsection