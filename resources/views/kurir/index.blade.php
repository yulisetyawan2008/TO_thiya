@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h2>Daftar Kurir</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/kurir/create" class="btn btn-sm btn-primary">Tambah Kurir</a>
                    </div>
                    <div class="col-md-2">
                        <a href="/kurir/pdf" class="btn btn-primary">Cetak Pdf</a>
                    </div>
                    <div class="col-md-2">
                        <a href="/kurir/excel" class="btn btn-primary">Cetak Excel</a>
                    </div>
                    <div class="col-md-5">
                        <form action="/kurir/search" method="get">
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
                Total kurir : {{$kurirs->total()}}<br>
                Halaman : {{$kurirs->currentPage()}} dari {{$kurirs->lastPage()}} halaman
                
                <div class="ml-3 mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kurir</th>
                                <th>No HP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kurirs as $kurir)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$kurir->nm_kurir}}</td>
                                <td>{{$kurir->noHp_kurir}}</td>
                                <td>
                                    <a href="/kurir/{{$kurir->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="/kurir/{{$kurir->id}}" method="POST" style="display: inline">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$kurirs->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection