@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card card-primary">
            <div class="card-header">
                <h2>Form Edit Produk Ummu Haidar</h2>
            </div>
            <div class="card-body">
                <div class="ml-3 mt-3">
                    <form action="/produk/{{$produk->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="produk">Masukkan Nama Produk</label>
                            <input type="text" class="form-control" id="produk" name = "produk" value="{{$produk->produk}}">
                        </div>
                        <div class="form-group">
                            <label for="satuan_id">Satuan</label>
                            <select name="satuan_id" id="satuan_id" class="form-control">
                                @foreach($satuans as $key => $satuan)
                                    @if ($satuan->id == $produk->satuan_id)
                                        <option value="{{$satuan->id}}" selected> {{ $satuan->satuan}}</option>
                                    @else
                                        <option value="{{$satuan->id}}"> {{ $satuan->satuan}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hrg_produk">Harga Produk</label>
                            <input type="text" class="form-control" id="hrg_produk" name = "hrg_produk" value="{{$produk->hrg_produk}}">
                        </div>
                        <div class="form-group">
                            <label for="spsf_produk">Spesifikasi Produk</label>
                            <input type="text" class="form-control" id="spsf_produk" name = "spsf_produk" value="{{$produk->spsf_produk}}">
                        </div>
                        <input hidden name="created_at" value="{{$produk->created_at}}">
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