@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>Total Penjualan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Total Biaya</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>

                    <p>Jumlah Penjualan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <p>Jumlah Produk</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card ml-3 text-white text-center" style="width: 14rem;">
                <div class="card-header bg-danger display-4 pt-4 pb-4">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-danger">INSTAGRAM</h5><br>
                    <a href="#" class="btn btn-danger">FOLLOW</a>
                </div>
            </div>
            <div class="card ml-4 text-white text-center" style="width: 14rem;">
                <div class="card-header bg-info display-4 pt-4 pb-4">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-info">FACEBOOK</h5><br>
                    <a href="#" class="btn btn-info">LIKE</a>
                </div>
            </div>
            <div class="card ml-4 text-white text-center" style="width: 14rem;">
                <div class="card-header bg-primary display-4 pt-4 pb-4">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-primary ">TWITTER</h5><br>
                    <a href="#" class="btn btn-primary">FOLLOW</a>
                </div>
            </div>
            <div class="card ml-4 text-white text-center" style="width: 14rem;">
                <div class="card-header bg-success display-4 pt-4 pb-4">
                <i class="fab fa-google"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-success">GOOGLE</h5><br>
                    <a href="#" class="btn btn-success">FOLLOW</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p class="text-center">
                    <strong>Penjualan 1 Agustus 2020 - 31 Agustus 2020</strong>
                </p>
                <div class="cart"> 
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                        </div>
                        <canvas id="penjualan" height="270" style="height: 180px; display: block; width: 623px;" width:"934" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p class="text-center">
                    <strong>Data Penjualan</strong>
                </p>
                <div class="progress-group">
                    Pizza Ayam Sosis
                    <span class="float-right">
                        <b>2.000.000</b>
                        /1.000.000
                    </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%">
                        </div>
                    </div>
                </div>
                <div class="progress-group">
                    Pizza Ayam Sosis
                    <span class="float-right">
                        <b>2.000.000</b>
                        /1.000.000
                    </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 75%">
                        </div>
                    </div>
                </div>
                <div class="progress-group">
                    Pizza Ayam Teriyaki
                    <span class="float-right">
                        <b>2.000.000</b>
                        /1.000.000
                    </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 75%">
                        </div>
                    </div>
                </div>
                <div class="progress-group">
                    Pizza Ayam Teriyaki
                    <span class="float-right">
                        <b>2.000.000</b>
                        /1.000.000
                    </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-info" style="width: 75%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection