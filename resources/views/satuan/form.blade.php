@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="card">
            <div class="card-header">
                <h2>Form Input Satuan</h2>
            </div>
            <div class="card-body">
                <div class="ml-3 mt-3">
                    <form action="/satuan" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="satuan"> Masukkan Satuan Barang</label>
                            <input type="text" class="form-control" id="satuan" name = "satuan" placeholder="Satuan Barang">
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