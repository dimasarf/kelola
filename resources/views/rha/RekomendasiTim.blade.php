@extends('layouts.dashboardLayout')
@section('navbar')
<div class="main-menu-area mg-tb-40">
    <div class="container">
    
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="/dashboard-pmi"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Laporan</a>
                    </li>
                    <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Rencana Kontijensi</a>
                    </li>
                    <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Tim</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/upload-rencana">Upload Rencana</a>
                            </li>
                            <li><a href="/daftar-rencana">Daftar Rencana</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/bentuk-tim">Bentuk Tim</a>
                            </li>
                            <li><a href="/daftar-tim">Daftar Tim</a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
            
        </div>
    </div>
</div>    
@endsection

@section('konten')

<link rel="stylesheet" href="/dashboard/css/wave/button.css">
<div class="breadcomb-area">
    <div class="container">
    <a href="#"><img src="/dashboard/images/tim1.jpg" alt="" /></a>
        <div class="row">
            <div class="col-lg-12 justify-content-center align-items-center">
                <h2 class="mb-5 " tesxt-align="center">Detail Rekomendasi TIM</h2>
            </div>        
        </div>
        <div class="row ">
            <br>
            <br>
            <div class="col-lg-3">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Tim Assesment</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>                                    
            </div>
            
            <div class="col-lg-3">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Tim Evakuasi</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>                                    
            </div>
            
            <div class="col-lg-3">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Tim Kesehatan</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>                                    
            </div>
            
            <div class="col-lg-3">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Tim Dapur Umum</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>                                    
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Wosh Water</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Tim Shelter Barak</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                        <i class="notika-icon notika-support"></i>
                    </div>
                    <div class="breadcomb-ctn">
                        <h2>Tim RFL</h2>
                        <p>4 <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success">Lihat Tim</button>
                    </div>
                </div>
            </div>
            <a href="/rekomendasi-tim" class="btn btn-primary notika-btn-primary col-lg-offset-5" style="margin-top: 4%">Kirim Tim</a>
        </div>
    </div>
</div>
@endsection