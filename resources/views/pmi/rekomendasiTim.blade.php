@extends('layouts.dashboardLayout')
@section('navbar')
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
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
                            <li><a href="form-elements.html">Upload Rencana</a>
                            </li>
                            <li><a href="form-components.html">Daftar Rencana</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="contact.html">Bentuk Tim</a>
                            </li>
                            <li><a href="invoice.html">Daftar Tim</a>
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
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center align-items-center">
                <h2 class="mb-5 ">Detail Rekomendasi TIM</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection