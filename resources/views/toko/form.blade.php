@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="ml-2 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h2 class="card-title">Input Data Toko</h2>
                </div>
                <div class="card-body">
                    <div>
                        <form role="form" action="/toko" method="POST">
                            @csrf 
                            <div class="form-group">
                                <label for="nm_toko">Masukkan Nama Toko</label>
                                <input type="text" class="form-control" id="nm_toko" name = "nm_toko" placeholder="Nama Toko">
                            </div>
                            <div class="form-group">
                                <label for="almt_toko">Masukkan Alamat Toko</label>
                                <input type="text" class="form-control" id="almt_toko" name = "almt_toko" placeholder="Alamat Toko">
                            </div>
                            <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
                            <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
                            <div>
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection