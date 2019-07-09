@extends('layouts.dashboardLayout')

@section('navbar')
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class=""><a  href="/dashboard-rha"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    </li>
                    <li><a  href="/upload-laporan"><i class="notika-icon notika-form"></i>Upload Laporan</a>
                    </li>
                    <li><a  href="/riwayat-laporan"><i class="notika-icon notika-support"></i>Riwayat Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <a href="#"><img src="/dashboard/images/rffff.png" alt="" /></a>
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
                        <h2 class="display-3">Selamat Datang di Dashboard RHA</h2>
                        <p>Kegiatan pengumpulan data dan informasi dengan tujuan untuk menilai kerusakan 
                            dan mengidentifikasi kebutuhan dasar yang diperlukan segera sebagai respon dalam suatu kejadian bencana (WHO).</p>
                    </div>
                </div>
            </div>
        </div>
    

    
    </div>
</div>


<!-- End Status area-->

@endsection