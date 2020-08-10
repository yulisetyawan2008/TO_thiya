@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <H2>Daftar Toko</H2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <a href="/toko/create" class="btn btn-sm btn-primary">Tambah Toko</a>
                </div>
                <div class="col-md-2">
                    <a href="/toko/pdf" class="btn btn-primary">Cetak Pdf</a>
                </div>
                <div class="col-md-2">
                    <a href="/toko/excel" class="btn btn-primary">Cetak Excel</a>
                </div>
                <div class="col-md-5">
                    <form action="/toko/search" method="get">
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
            Total satuan : {{$tokos->total()}}<br>
            Halaman : {{$tokos->currentPage()}} dari {{$tokos->lastPage()}} halaman
            
            <div class="ml-3 mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Toko</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tokos as $toko)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$toko->nm_toko}}</td>
                            <td>{{$toko->almt_toko}}</td>
                            <td>
                                <a href="/toko/{{$toko->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/toko/{{$toko->id}}" class="btn btn-sm btn-success">Show</a>
                                <form action="/toko/{{$toko->id}}" method="POST" style="display: inline">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$tokos->links()}}
            </div>
            
        </div>
    </div>

@endsection