@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Daftar Satuan Barang</h2>
        </div>
        <div class="card-body">
            <a href="/satuan/create" class="btn btn-primary">Tambah Satuan</a>
            <div class="ml-3 mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Satuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($satuans as $satuan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$satuan->satuan}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <form action="" method="POST" style="display:inline">
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