@extends('layouts.dashboardLayout')
@section('navbar')
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a  href="/dashboard-pmi"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li><a  href="/laporan"><i class="notika-icon notika-windows"></i> Laporan</a>
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
                    <a><img src="/dashboard/images/pmiii.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    
</div>    
@endsection

@section('konten')


<div class="sale-statistic-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jumbotron">
                    <div class="container">
                        <h2 class="display-3">Selamat Datang di Dashboard PMI</h2>
                        <p>PMI adalah organisasi kemanusiaan yang berstatus badan hukum, 
                        diundangkan dengan Undang-Undang nomor 1 tahun 2018 tentang Kepalangmerahan guna menjalankan kegiatan Kepalangmerahan  
                        sesuai dengan Konvensi Jenewa Tahun 1949, dengan tujuan untuk mencegah dan meringankan penderitaan dan melindungi korban 
                        tawanan perang dan bencana, tanpa membedakan agama, bangsa, suku bangsa, warna kulit, jenis kelamin, golongan, dan Pandangan Politik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        
@endsection