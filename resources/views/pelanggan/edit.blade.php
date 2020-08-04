@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Pelanggan</h2>
            </div>
            <div class="card-body">
                <div class="ml-3 mt-3">
                    <form action="/pelanggan/{{$pelanggan->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nm_pelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nm_pelanggan" name = "nm_pelanggan" value="{{$pelanggan->nm_pelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="noHp_pelanggan">Nomor HP Pelanggan</label>
                            <input type="text" class="form-control" id="noHp_pelanggan" name = "noHp_pelanggan" value="{{$pelanggan->noHp_pelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="almt_pelanggan">Alamat Pelanggan</label>
                            <input type="text" class="form-control" id="almt_pelanggan" name = "almt_pelanggan" value="{{$pelanggan->almt_pelanggan}}">
                        </div>
                        <input hidden name="created_at" value="{{$pelanggan->created_at}}">
                        <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection