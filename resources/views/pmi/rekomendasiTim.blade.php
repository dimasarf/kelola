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
                        <p>{{$nAssessment}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimAssessment">Lihat Tim</button>
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
                        <p>{{$nEvakuasi}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimEvakuasi">Lihat Tim</button>
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
                        <p>{{$nKesehatan}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimKesehatan">Lihat Tim</button>
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
                        <p>{{$nDapur}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimDapur">Lihat Tim</button>
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
                        <p>{{$nWater}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimWater">Lihat Tim</button>
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
                        <p>{{$nShelter}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimShelter">Lihat Tim</button>
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
                        <p>{{$nRfl}} <span class="bread-ntd">orang </span></p>
                        <button class="btn btn-success notika-btn-success" data-toggle="modal" data-target="#detailTimRfl">Lihat Tim</button>
                    </div>
                </div>
            </div>

            {{-- Modal Tim Assessment --}}
            <div class="modal fade" id="detailTimAssessment" role="dialog">
                <div class="modal-dialog modals-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h2>Anggota Tim Assessment</h2>
                            <div class="bsc-tbl">
                                <table class="table table-sc-ex">
                                    <thead>
                                    </thead>
                                    <tbody>
                                            @foreach ($timAssessment as $assessment)
                                                <tr>
                                                    <td>{{$assessment->nama}}</td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Tim Evakuasi --}}
            <div class="modal fade" id="detailTimEvakuasi" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Anggota Tim Evakuasi</h2>
                                <div class="bsc-tbl">
                                    <table class="table table-sc-ex">
                                        <thead>
                                        </thead>
                                        <tbody>
                                                @foreach ($timEvakuasi as $evakuasi)
                                                    <tr>
                                                        <td>{{$evakuasi->nama}}</td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>

            {{-- Modal Tim Kesehatan --}}
            <div class="modal fade" id="detailTimKesehatan" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Anggota Tim Kesehatan</h2>
                                <div class="bsc-tbl">
                                    <table class="table table-sc-ex">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            @foreach ($timKesehatan as $kesehatan)
                                                <tr>
                                                    <td>{{$kesehatan->nama}}</td>
                                                </tr>                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>

            {{-- Modal Tim Dapur --}}
            <div class="modal fade" id="detailTimDapur" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Anggota Tim Dapur</h2>
                                <div class="bsc-tbl">
                                    <table class="table table-sc-ex">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            @foreach ($timDapur as $dapur)
                                                <tr>
                                                    <td>{{$dapur->nama}}</td>
                                                </tr>
                                            @endforeach                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>


            {{-- Modal Tim Water --}}
            <div class="modal fade" id="detailTimWater" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Anggota Tim Wosh Water</h2>
                                <div class="bsc-tbl">
                                    <table class="table table-sc-ex">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            @foreach ($timWater as $water)
                                                <tr>
                                                    <td>{{$water->nama}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>

            {{-- Modal Tim Shelter --}}
            <div class="modal fade" id="detailTimShelter" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Anggota Tim Shelter</h2>
                                <div class="bsc-tbl">
                                    <table class="table table-sc-ex">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            @foreach ($timShelter as $shelter)
                                                <tr>
                                                    <td>{{$shelter->nama}}</td>
                                                </tr>
                                            @endforeach              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>

            {{-- Modal Tim Shelter --}}
            <div class="modal fade" id="detailTimRfl" role="dialog">
                    <div class="modal-dialog modals-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h2>Anggota Tim RFL</h2>
                                <div class="bsc-tbl">
                                    <table class="table table-sc-ex">
                                        <thead>
                                        </thead>
                                        <tbody>
                                            @foreach ($timRfl as $rfl)
                                                <tr>
                                                    <td>{{$rfl->nama}}</td>
                                                </tr>
                                            @endforeach                  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
            </div>
            <a href="/kirim-tim" class="btn btn-primary notika-btn-primary col-lg-offset-5" style="margin-top: 4%">Kirim Tim</a>
            <br>
            @if(Session::has('Pesan'))
            <div class="row">
              <div class="col-lg-offset-3 col-lg-6">
                  <div class="alert alert-success" role="alert">
                      Data Berhasil Disimpan!
                  </div>
              </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection