@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <H2>Daftar Toko</H2>
        </div>
        <div class="card-body">
            <a href="/toko/create" class="btn btn-sm btn-primary">Tambah Toko</a>
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