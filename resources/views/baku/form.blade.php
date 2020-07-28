@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-warning">
        <div class="card">
            <div class="card-title">
                <h2>Form Input Bahan Baku</h2>
            </div>
            <form action="/baku" method="POST">
                @csrf
                <div class="card-body perhitungan">
                    <div class="form-group">
                        <label for="barang_id">Nama Barang</label>
                        <select name="barang_id" id="barang_id" class="form-control">
                        @foreach($barangs as $key => $barang)
                            <option value="{{$barang->id}}"> {{ $barang->nm_barang}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jml_barang">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jml_barang" name = "jml_barang" placeholder="Jumlah Barang">
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
                        <label for="hrg_barang">Harga Barang</label>
                        <input type="text" class="form-control" id="hrg_barang" name = "hrg_barang" placeholder="Harga Barang">
                    </div>
                    <div class="form-group">
                        <label for="hrg_total">Total Harga Barang</label>
                        <input type="text" class="form-control" id="hrg_total" name = "hrg_total" placeholder="Total Harga Barang" readonly>
                    </div>
                    <div class="form-group">
                        <label for="toko_id">Toko</label>
                        <select name="toko_id" id="toko_id" class="form-control">
                        @foreach($tokos as $key => $toko)
                            <option value="{{$toko->id}}"> {{ $toko->nm_toko}}</option>
                        @endforeach
                        </select>
                    </div>
                    <input hidden name="created_at" value="{{\Carbon\Carbon::now()}}">
                    <input hidden name="updated_at" value="{{\Carbon\Carbon::now()}}">
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(".perhitungan").keyup(function(){
            var jml_barang = parseInt($("#jml_barang").val())
            var hrg_barang = parseInt($("#hrg_barang").val())

            var hrg_total = jml_barang * hrg_barang;
            $("#hrg_total").attr("value", hrg_total)
        });
    
    
    </script>

@endpush