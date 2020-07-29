@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Pelanggan</h2>
            </div>
            <div class="card-body">
                <div class="ml-3 mt-3">
                    <form action="/pelanggan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nm_pelanggan">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nm_pelanggan" name = "nm_pelanggan" placeholder="Nama Pelanggan">
                        </div>
                        <div class="form-group">
                            <label for="noHp_pelanggan">Nomor HP Pelanggan</label>
                            <input type="text" class="form-control" id="noHp_pelanggan" name = "noHp_pelanggan" placeholder="Nomor HP Pelanggan">
                        </div>
                        <div class="form-group">
                            <label for="almt_pelanggan">Alamat Pelanggan</label>
                            <input type="text" class="form-control" id="almt_pelanggan" name = "almt_pelanggan" placeholder="Alamat Pelanggan">
                        </div>
                        <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
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