@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Form Input Barang</h2>
            </div>
                <form action="/barang" method="POST">
                @csrf
                    <div class="card-body">
                        <div class="ml-3 mt-3">
                            <div class="form-group">
                                <label for="nm_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nm_barang" name = "nm_barang" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk Barang</label>
                                <input type="text" class="form-control" id="merk" name = "merk" placeholder="Merk">
                            </div>
                            <div class="form-group">
                                <label for="spsf_barang">Spesifikasi Barang</label>
                                <input type="text" class="form-control" id="spsf_barang" name = "spsf_barang" placeholder="Spesifikasi Barang">
                            </div>
                            <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
                            <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        
                
                    </div>
                </form>
        </div>
    </div>
@endsection