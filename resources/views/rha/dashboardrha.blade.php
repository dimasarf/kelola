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
    </div>
</div>    

@endsection

@section('konten')
<div class="notika-status-area">
    <div class="container">
    <a href="#"><img src="/dashboard/images/2.png" alt="" /></a>


    </div>
</div>

<!-- End Status area-->

@endsection