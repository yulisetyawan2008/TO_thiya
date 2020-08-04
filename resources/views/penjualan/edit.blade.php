@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h2>Edit Penjualan</h2>
            </div>
            <div class="card-body penjualan">
                <div class="ml-3 mt-3">
                    <form action="/penjualan/{{$penjualan->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input name="tanggal" type="text" id="tanggal" class="form-control datepicker" value="{{$penjualan->tanggal}}">
                        </div>
                        <div class="form-group">
                            <label for="produk_id">Nama Produk</label>
                            <select name="produk_id" id="produk_id" class="form-control">
                            @foreach($produks as $produk)
                                @if($produk->id == $penjualan->produk_id)
                                    <option value="{{$produk->id}}" selected> {{ $produk->produk}}</option>
                                @else
                                    <option value="{{$produk->id}}"> {{ $produk->produk}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jml_produk">Jumlah Produk</label>
                            <input type="text" class="form-control" id="jml_produk" name = "jml_produk" value="{{$penjualan->jml_produk}}">
                        </div>
                        <div class="form-group">
                            <label for="satuan_id">Satuan</label>
                            <select name="satuan_id" id="satuan_id" class="form-control">
                                @foreach($satuans as $key => $satuan)
                                    @if($satuan->id == $penjualan->satuan_id)
                                        <option value="{{$satuan->id}}" selected> {{ $satuan->satuan}}</option>
                                    @else
                                        <option value="{{$satuan->id}}"> {{ $satuan->satuan}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hrg_produk">Harga Produk</label>
                            <input type="text" class="form-control" id="hrg_produk" name = "hrg_produk" value="{{$penjualan->hrg_produk}}">
                        </div>
                        <div class="form-group">
                            <label for="ttl_hrg">Total Harga Produk</label>
                            <input type="text" class="form-control" id="ttl_hrg" name = "ttl_hrg" value="{{$penjualan->ttl_hrg}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pelanggan_id">Nama Pelanggan</label>
                            <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                                @foreach($pelanggans as $key => $pelanggan)
                                    @if($pelanggan->id == $penjualan->pelanggan_id)
                                        <option value="{{$pelanggan->id}}" selected> {{ $pelanggan->nm_pelanggan}}</option>
                                    @else
                                        <option value="{{$pelanggan->id}}"> {{ $pelanggan->nm_pelanggan}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kurir_id">Nama Kurir</label>
                            <select name="kurir_id" id="kurir_id" class="form-control">
                                @foreach($kurirs as $key => $kurir)
                                    @if($kurir->id == $penjualan->kurir_id)
                                        <option value="{{$kurir->id}}" selected> {{ $kurir->nm_kurir}}</option>
                                    @else
                                        <option value="{{$kurir->id}}"> {{ $kurir->nm_kurir}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <input hidden name="created_at" value="{{$penjualan->created_at}}">
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

@push('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(".penjualan").keyup(function(){
            var jml_produk = parseInt($("#jml_produk").val())
            var hrg_produk = parseInt($("#hrg_produk").val())

            var ttl_hrg = jml_produk * hrg_produk;
            $("#ttl_hrg").attr("value", ttl_hrg)
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