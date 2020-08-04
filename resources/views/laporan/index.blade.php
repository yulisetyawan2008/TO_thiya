@extends('layouts.master')

@section('content')
    <form action="/laporan/cari" method="GET">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="dari">Dari</label>
            <input name="dari" type="text" id="dari" class="form-control datepicker" placeholder="Dari Tanggal">
        </div>
        <div class="form-group">
            <label for="sampai">Sampai</label>
            <input name="sampai" type="text" id="sampai" class="form-control datepicker" placeholder="Sampai Tanggal">
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    </form>


@if(isset($bakus))
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Data Pembelian Bahan Baku</h3>
                        <a href="/export/masuk/{{$dari}}/{{$sampai}}" class="btn btn-success">Export to Excel</a>
                    </div>
                    <div class="table-responsive">
                        <table id="table-barang-masuk" class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Jumlah Barang</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Harga Total</th>
                                    <th scope="col">Nama Toko</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bakus as $baku)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{date('d M Y', strtotime($baku->tanggal))}}</td>
                                    <td>{{$baku->nm_barang}}</td>
                                    <td>{{$baku->jml_barang}}</td>
                                    <td>{{$baku->satuan}}</td>
                                    <td>{{number_format($baku->hrg_barang,0)}}</td>
                                    <td>{{number_format($baku->hrg_total,0)}}</td>
                                    <td>{{$baku->nm_toko}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Jumlah Total</td>
                                    <td colspan="2"></td>
                                    <td>{{number_format($hrg_tot,0)}}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endif
@if(isset($penjualans))
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Data Penjualan Produk</h3>
                        <a href="/export/masuk/{{$dari}}/{{$sampai}}" class="btn btn-success">Export to Excel</a>
                    </div>
                    <div class="table-responsive">
                        <table id="table-barang-masuk" class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Jumlah Barang</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Harga Total</th>
                                    <th scope="col">Nama Pembeli</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penjualans as $penjualan)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{date('d M Y', strtotime($penjualan->tanggal))}}</td>
                                    <td>{{$penjualan->produk}}</td>
                                    <td>{{$penjualan->jml_produk}}</td>
                                    <td>{{$penjualan->satuan}}</td>
                                    <td>{{number_format($penjualan->hrg_produk,0)}}</td>
                                    <td>{{number_format($penjualan->ttl_hrg,0)}}</td>
                                    <td>{{$penjualan->nm_pelanggan}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Jumlah Total</td>
                                    <td colspan="2"></td>
                                    <td>{{number_format($hrg_total,0)}}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endif
@endsection

@push('scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".datepicker").datepicker();
            });
        </script>
@endpush