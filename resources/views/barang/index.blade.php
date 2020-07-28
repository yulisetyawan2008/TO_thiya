@extends('layouts.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h2>Daftar Nama Barang</h2>
        </div>
        <div class="card-body">
            <a href="/barang/create" class="btn btn-primary">Tambah Barang</a>
            <div class="mt-3 ml-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama barang</th>
                            <th>Merk</th>
                            <th>Spesifikasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $barang)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$barang->nm_barang}}</td>
                            <td>{{$barang->merk}}</td>
                            <td>{{$barang->spsf_barang}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <form action="" method="POST" style="display: inline">
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