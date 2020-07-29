@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h2>Daftar Nama Pelanggan</h2>
            </div>
            <div class="card-body">
                <a href="/pelanggan/create" class="btn btn-primary">Tambah Pelanggan</a>
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
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
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
    </div>
@endsection