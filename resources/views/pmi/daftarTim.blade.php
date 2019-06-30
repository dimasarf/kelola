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
<div class="container">
    <div class="row">
        <h3 style="margin-left: 1%; margin-bottom: 1%">Daftar Rekomendasi Tim</h3>
        <div class="col-lg-7 mx-auto">
                <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                      <div class="row">
                            <div class="col-lg-8">
                                <div class="recent-post-items">
                                    <div class="recent-post-signle rct-pt-mg-wp">
                                        <a href="#">
                                            <div class="recent-post-flex">
                                                <div class="recent-post-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="recent-post-it-ctn">
                                                    <h2>Banjir</h2>
                                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-2">
                                <a href="/rekomendasi-tim"class="btn btn-success notika-btn-success">Lihat Tim</a>
                            </div>
                        </div>
                        
                    </div>
        </div>
        
    </div>
    <br>
    <div class="row">
            <div class="col-lg-7   center-block">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                          <div class="row">
                                <div class="col-lg-8">
                                    <div class="recent-post-items">
                                        <div class="recent-post-signle rct-pt-mg-wp">
                                            <a href="#">
                                                <div class="recent-post-flex">
                                                    <div class="recent-post-img">
                                                        <img src="img/post/2.jpg" alt="" />
                                                    </div>
                                                    <div class="recent-post-it-ctn">
                                                        <h2>Banjir</h2>
                                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-offset-2 col-lg-2">
                                    <a href="#"class="btn btn-success notika-btn-success">Lihat Tim</a>
                                </div>
                            </div>
                            
                        </div>
            </div>
            
    </div>
</div>    
@endsection