@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="card">
            <div class="card-header">
                <h2>Form Input Satuan</h2>
            </div>
            <div class="card-body">
                <div class="ml-3 mt-3">
                    <form action="/kurir/{{$kurir->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nm_kurir">Nama Kurir</label>
                            <input type="text" class="form-control" id="nm_kurir" name = "nm_kurir" value="{{$kurir->nm_kurir}}">
                        </div>
                        <div class="form-group">
                            <label for="noHp_kurir">No HP Kurir</label>
                            <input type="text" class="form-control" id="noHp_kurir" name = "noHp_kurir" value="{{$kurir->noHp_kurir}}">
                        </div>
                        <input hidden name="created_at" value="{{$kurir->created_at}}">
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