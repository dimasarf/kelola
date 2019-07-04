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
<!-- favicon
    ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/jquery.dataTables.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css">
        <!-- font awesome CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/owl.carousel.css">
        <link rel="stylesheet" href="/dashboard/css/owl.theme.css">
        <link rel="stylesheet" href="/dashboard/css/owl.transitions.css">
        <!-- meanmenu CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/meanmenu/meanmenu.min.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/animate.css">
        <!-- summernote CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/summernote/summernote.css">
        <!-- Range Slider CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/themesaller-forms.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/normalize.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- Notika icon CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/notika-custom-icon.css">
        <!-- bootstrap select CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/bootstrap-select/bootstrap-select.css">
        <!-- datapicker CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/datapicker/datepicker3.css">
        <!-- Color Picker CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/color-picker/farbtastic.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/chosen/chosen.css">
        <!-- notification CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/notification/notification.css">
        <!-- dropzone CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/dropzone/dropzone.css">
        <!-- wave CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/wave/waves.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/main.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="/dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
<div class="form-element-area">        
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Halaman Bentuk Tim</h2>
                                <p>Tim akan dibentuk berdasarkan laporan yang dipilih</p>
                            </div>
                            <div class="row">
                              <div class="table-responsive">
                                <table id="data-table-basic" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Laporan</th>
                                            <th>Jenis Bencana</th>
                                            <th>Lokasi</th>
                                            <th>Jumlah Korban</th>
                                            <th>Kerusakan Infrastruktur</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Banjir</td>
                                            <td>Jakarta</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td><a href="/rekomendasi-tim" class="btn btn-success notika-btn-success" >Bentuk Tim</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Gempa Bumi</td>
                                            <td>Bandung</td>
                                            <td>12</td>
                                            <td>11</td>
                                            <td><a href="/rekomendasi-tim" class="btn btn-success notika-btn-success" >Bentuk Tim</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tsunami</td>
                                            <td>Kebumen</td>
                                            <td>400</td>
                                            <td>700</td>
                                            <td><a href="/rekomendasi-tim" class="btn btn-success notika-btn-success" >Bentuk Tim</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tsunami</td>
                                            <td>Depok</td>
                                            <td>20</td>
                                            <td>22</td>
                                            <td><a href="/rekomendasi-tim" class="btn btn-success notika-btn-success" >Bentuk Tim</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Puting beliung</td>
                                            <td>Ambon</td>
                                            <td>40</td>
                                            <td>33</td>
                                            <td><a href="/rekomendasi-tim" class="btn btn-success notika-btn-success" >Bentuk Tim</a></td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id Laporan</th>
                                            <th>Jenis Bencana</th>
                                            <th>Lokasi</th>
                                            <th>Jumlah Korban</th>
                                            <th>Kerusakan Infrastruktur</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                                
                                
                            </div>
                        </div>
                        
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/dashboard/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="/dashboard/js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="/dashboard/js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="/dashboard/js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="/dashboard/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="/dashboard/js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="/dashboard/js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
============================================ -->
<script src="/dashboard/js/counterup/jquery.counterup.min.js"></script>
<script src="/dashboard/js/counterup/waypoints.min.js"></script>
<script src="/dashboard/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
============================================ -->
<script src="/dashboard/js/sparkline/jquery.sparkline.min.js"></script>
<script src="/dashboard/js/sparkline/sparkline-active.js"></script>
<!-- flot JS
============================================ -->
<script src="/dashboard/js/flot/jquery.flot.js"></script>
<script src="/dashboard/js/flot/jquery.flot.resize.js"></script>
<script src="/dashboard/js/flot/flot-active.js"></script>
<!-- knob JS
============================================ -->
<script src="/dashboard/js/knob/jquery.knob.js"></script>
<script src="/dashboard/js/knob/jquery.appear.js"></script>
<script src="/dashboard/js/knob/knob-active.js"></script>
<!-- Input Mask JS
============================================ -->
<script src="/dashboard/js/jasny-bootstrap.min.js"></script>
<script src="/dashboard/js/data-table/jquery.dataTables.min.js"></script>
<script src="/dashboard/js/data-table/data-table-act.js"></script>
<!-- icheck JS
============================================ -->
<script src="/dashboard/js/icheck/icheck.min.js"></script>
<script src="/dashboard/js/icheck/icheck-active.js"></script>
<!-- rangle-slider JS
============================================ -->
<script src="/dashboard/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/dashboard/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
<script src="/dashboard/js/rangle-slider/rangle-active.js"></script>
<!-- datapicker JS
============================================ -->
<script src="/dashboard/js/datapicker/bootstrap-datepicker.js"></script>
<script src="/dashboard/js/datapicker/datepicker-active.js"></script>
<!-- bootstrap select JS
============================================ -->
<script src="/dashboard/js/bootstrap-select/bootstrap-select.js"></script>
<!--  color-picker JS
============================================ -->
<script src="/dashboard/js/color-picker/farbtastic.min.js"></script>
<script src="/dashboard/js/color-picker/color-picker.js"></script>
<!--  notification JS
============================================ -->
<script src="/dashboard/js/notification/bootstrap-growl.min.js"></script>
<script src="/dashboard/js/notification/notification-active.js"></script>
<!--  summernote JS
============================================ -->
<script src="/dashboard/js/summernote/summernote-updated.min.js"></script>
<script src="/dashboard/js/summernote/summernote-active.js"></script>
<!-- dropzone JS
============================================ -->
<script src="/dashboard/js/dropzone/dropzone.js"></script>
<!--  wave JS
============================================ -->
<script src="/dashboard/js/wave/waves.min.js"></script>
<script src="/dashboard/js/wave/wave-active.js"></script>
<!--  chosen JS
============================================ -->
<script src="/dashboard/js/chosen/chosen.jquery.js"></script>
<!--  Chat JS
============================================ -->
<script src="/dashboard/js/chat/jquery.chat.js"></script>
<!--  todo JS
============================================ -->
<script src="/dashboard/js/todo/jquery.todo.js"></script>
<!-- plugins JS
============================================ -->
<script src="/dashboard/js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="/dashboard/js/main.js"></script>
<!-- tawk chat JS
============================================ -->
<script src="js/tawk-chat.js"></script>
@endsection