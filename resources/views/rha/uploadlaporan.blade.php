@extends('layouts.dashboardLayout')
@section('navbar')
<div class="main-menu-area mg-tb-40">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                  <li class=""><a href="/dashboard-rha"><i class="notika-icon notika-house"></i> Home</a>
                  </li>
                  </li>
                  <li><a href="/upload-laporan"><i class="notika-icon notika-form"></i>Upload Laporan</a>
                  </li>
                  <li><a href="/riwayat-laporan"><i class="notika-icon notika-support"></i>Riwayat Laporan</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>    
  
@endsection

@section('konten')

 <!-- datapicker CSS============================================ -->
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
        <link rel="stylesheet" href="/dashboard/css/wave/button.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/main.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/style2.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="/dashboard/css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="/dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
        <form action="/upload-laporan" id="demo1Upload" method="POST">
          @csrf
          <div class="row" id="identitas">
            <div class="col-lg-offset-3 col-lg-6">
              <div class="modal-inner-pro">
                <div class="row">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-offset-1 col-lg-5">
                          <img src="/dashboard/img/logo/logo2.png" alt="" class="mx-auto" style="margin-left: 20%"/>
                          
                          <h2 style="margin-top: 4%; margin-bottom: 6%; margin-left: 5%">Halaman Pelaporan Hasil Penilaian</h2>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" placeholder="Nama Petugas" name="petugas">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-map"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" placeholder="Lokasi Bencana" name="lokasi">
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-support"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" placeholder="Jumlah Korban" name="korban">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                            <i class="notika-icon notika-mail"></i>
                        </div>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" placeholder="Jumlah Infrastruktur" name="infrastruktur">
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-ft">
                  <button type="submit" class="btn btn-modal" id="next" style="margin-right: 40%; margin-top: 5%">Kirim</button>
                </div>
              </div>
            </div>
          </div>
        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
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
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/dashboard/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="/dashboard/js/tawk-chat.js"></script>
    <script type="text/javascript">
      Dropzone.options.demo1Upload =
       {
        autoProcessQueue: false,
          addRemoveLinks: true,
          timeout: 5000,
          
          success: function(file, response) 
          {
              console.log(response);
          },
          error: function(file, response)
          {
             return false;
          }
        };
        $(document).ready(function() {
          $("#upload").hide();
        });
        $('#next').click(function()
        {
          $('#identitas').hide();
          $("#upload").show();
        })
        $('#sebelum').click(function()
        {
          $('#identitas').show();
          $("#upload").hide();
        })
        $("#button").click(function (e) {
          e.preventDefault();
          myDropzone.processQueue();
      })
    </script>
@endsection