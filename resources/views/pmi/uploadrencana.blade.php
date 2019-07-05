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
<div class="dropzone-area">
        <div class="container">
            <div class="row">
              <div class="panel panel-primary">
                <div class="panel-heading">Upload Rencana</div>
                <div class="panel-body">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {{-- <form method="post" action="/upload-rencana" enctype="multipart/form-data" 
                          class="dropzone" id="dropzone">
                          @csrf
                        </form>    --}}
                        <div id="dropzone1" class="multi-uploader-cs">
                            <form action="/upload-rencana" class="dropzone dropzone-nk needsclick" id="demo1-upload" method="POST">
                              @csrf
                                <div class="dz-message needsclick download-custom">
                                    <i class="notika-icon notika-cloud"></i>
                                    <h2>Klik atau seret file kesini</h2>
                                    <p><span class="note needsclick">File yang anda pilih akan secara otomatis tersimpan</span>
                                  </p>                            
                                </div>





                          </div>
                        </div>
                        
                        <br>
                      </form>
                        
                    </div>
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
      Dropzone.options.dropzone =
       {
          maxFilesize: 12,
          renameFile: function(file) {
              var dt = new Date();
              var time = dt.getTime();
             return time+file.name;
          },
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
    </script>
@endsection