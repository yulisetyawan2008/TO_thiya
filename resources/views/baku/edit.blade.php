@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-warning">
        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Form Edit Bahan Baku</h2>
            </div>
            <form action="/baku/{{$baku->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body perhitungan">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input name="tanggal" type="text" id="tanggal" class="form-control datepicker" value="{{$baku->tanggal}}">
                    </div>
                    <div class="form-group">
                        <label for="barang_id">Nama Barang</label>
                        <select name="barang_id" id="barang_id" class="form-control">
                        @foreach($barangs as $key => $barang)
                            @if($barang->id == $baku->barang_id)
                                <option value="{{$barang->id}}" selected> {{ $barang->nm_barang}}</option>
                            @else
                                <option value="{{$barang->id}}"> {{ $barang->nm_barang}}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jml_barang">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jml_barang" name = "jml_barang" value="{{$baku->jml_barang}}">
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
                        <input type="text" class="form-control" id="hrg_barang" name = "hrg_barang" value="{{$baku->hrg_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="hrg_total">Total Harga Barang</label>
                        <input type="text" class="form-control" id="hrg_total" name = "hrg_total" value="{{$baku->hrg_total}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="toko_id">Toko</label>
                            <select name="toko_id" id="toko_id" class="form-control">
                                @foreach($tokos as $key => $toko)
                                    @if($toko->id == $baku->toko_id)
                                        <option value="{{$toko->id}}" selected> {{ $toko->nm_toko}}</option>
                                    @else
                                        <option value="{{$toko->id}}"> {{ $toko->nm_toko}}</option>
                                    @endif
                                @endforeach
                            </select>
                    </div>
                    <input hidden name="created_at" value="{{$baku->created_at}}">
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
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".datepicker").datepicker();
            });
        </script>
@endpush