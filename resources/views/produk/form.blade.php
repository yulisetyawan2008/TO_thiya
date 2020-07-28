@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card card-primary">
            <div class="card-header">
                <h2>Form Input Produk Ummu Haidar</h2>
            </div>
            <div class="card-body">
                <div class="ml-3 mt-3">
                    <form action="/produk" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="produk">Masukkan Nama Produk</label>
                            <input type="text" class="form-control" id="produk" name = "produk" placeholder="Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="satuan_id">Satuan</label>
                            <select name="satuan_id" id="satuan_id" class="form-control">
                                @foreach($satuans as $key => $satuan)
                                    <option value="{{$satuan->id}}"> {{ $satuan->satuan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hrg_produk">Harga Produk</label>
                            <input type="text" class="form-control" id="hrg_produk" name = "hrg_produk" placeholder="Harga Produk">
                        </div>
                        <div class="form-group">
                            <label for="spsf_produk">Spesifikasi Produk</label>
                            <input type="text" class="form-control" id="spsf_produk" name = "spsf_produk" placeholder="Spesifikasi Produk">
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