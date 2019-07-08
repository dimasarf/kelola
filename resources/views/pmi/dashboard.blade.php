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
<div class="notika-status-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">50,000</span></h2>
                        <p>Total Website Traffics</p>
                    </div>
                    <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">90,000</span>k</h2>
                        <p>Website Impressions</p>
                    </div>
                    <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2>$<span class="counter">40,000</span></h2>
                        <p>Total Online Sales</p>
                    </div>
                    <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                    <div class="website-traffic-ctn">
                        <h2><span class="counter">1,000</span></h2>
                        <p>Total Support Tickets</p>
                    </div>
                    <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Status area-->
<!-- Start Sale Statistic area-->

<div class="sale-statistic-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <div class="sale-statistic-inner notika-shadow mg-tb-30">
                    <div class="curved-inner-pro">
                        <div class="curved-ctn">
                            <h2>Sales Statistics</h2>
                            <p>Vestibulum purus quam scelerisque, mollis nonummy metus</p>
                        </div>
                    </div>
                    <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                </div>
            </div>

            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Sale Statistic area-->

<!-- Start Email Statistic area-->
<div class="notika-email-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="email-statis-inner notika-shadow">
                    <div class="email-ctn-round">
                        <div class="email-rdn-hd">
                            <h2>Email Statistics</h2>
                        </div>
                        <div class="email-statis-wrap">
                            <div class="email-round-nock">
                                <input type="text" class="knob" value="0" data-rel="55" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                            </div>
                            <div class="email-ctn-nock">
                                <p>Total Emails Sent</p>
                            </div>
                        </div>
                        <div class="email-round-gp">
                            <div class="email-round-pro">
                                <div class="email-signle-gp">
                                    <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Bounce Rate</p>
                                </div>
                            </div>
                            <div class="email-round-pro">
                                <div class="email-signle-gp">
                                    <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Total Opened</p>
                                </div>
                            </div>
                            <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                <div class="email-signle-gp">
                                    <input type="text" class="knob" value="0" data-rel="45" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Total Ignored</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                    <div class="recent-post-ctn">
                        <div class="recent-post-title">
                            <h2>Recent Posts</h2>
                        </div>
                    </div>
                    <div class="recent-post-items">
                        <div class="recent-post-signle rct-pt-mg-wp">
                            <a href="#">
                                <div class="recent-post-flex">
                                    <div class="recent-post-img">
                                        <img src="img/post/2.jpg" alt="" />
                                    </div>
                                    <div class="recent-post-it-ctn">
                                        <h2>Smith</h2>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="recent-post-signle">
                            <a href="#">
                                <div class="recent-post-flex rct-pt-mg">
                                    <div class="recent-post-img">
                                        <img src="img/post/1.jpg" alt="" />
                                    </div>
                                    <div class="recent-post-it-ctn">
                                        <h2>John Deo</h2>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="recent-post-signle">
                            <a href="#">
                                <div class="recent-post-flex rct-pt-mg">
                                    <div class="recent-post-img">
                                        <img src="img/post/4.jpg" alt="" />
                                    </div>
                                    <div class="recent-post-it-ctn">
                                        <h2>Malika</h2>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="recent-post-signle">
                            <a href="#">
                                <div class="recent-post-flex rct-pt-mg">
                                    <div class="recent-post-img">
                                        <img src="img/post/2.jpg" alt="" />
                                    </div>
                                    <div class="recent-post-it-ctn">
                                        <h2>Smith</h2>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="recent-post-signle">
                            <a href="#">
                                <div class="recent-post-flex rct-pt-mg">
                                    <div class="recent-post-img">
                                        <img src="img/post/1.jpg" alt="" />
                                    </div>
                                    <div class="recent-post-it-ctn">
                                        <h2>John Deo</h2>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="recent-post-signle">
                            <a href="#">
                                <div class="recent-post-flex rc-ps-vw">
                                    <div class="recent-post-line rct-pt-mg">
                                        <p>View All</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                    <div class="rc-it-ltd">
                        <div class="recent-items-ctn">
                            <div class="recent-items-title">
                                <h2>Recent Items</h2>
                            </div>
                        </div>
                        <div class="recent-items-inn">
                            <table class="table table-inner table-vmiddle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th style="width: 60px">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="f-500 c-cyan">4555</td>
                                        <td>Samsung Galaxy Mega</td>
                                        <td class="f-500 c-cyan">$921</td>
                                    </tr>
                                    <tr>
                                        <td class="f-500 c-cyan">4556</td>
                                        <td>Huawei Ascend P6</td>
                                        <td class="f-500 c-cyan">$240</td>
                                    </tr>
                                    <tr>
                                        <td class="f-500 c-cyan">8778</td>
                                        <td>HTC One M8</td>
                                        <td class="f-500 c-cyan">$400</td>
                                    </tr>
                                    <tr>
                                        <td class="f-500 c-cyan">5667</td>
                                        <td>Samsung Galaxy Alpha</td>
                                        <td class="f-500 c-cyan">$870</td>
                                    </tr>
                                    <tr>
                                        <td class="f-500 c-cyan">7886</td>
                                        <td>LG G3</td>
                                        <td class="f-500 c-cyan">$790</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="recent-items-chart" class="flot-chart-items flot-chart vt-ct-it tb-rc-it-res"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Email Statistic area-->

        
@endsection