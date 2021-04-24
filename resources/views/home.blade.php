<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset("images/logo.png")}}" type="image/ico" />

    <title>Mobil Hotel</title>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <!-- Bootstrap -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"  >
    <!-- NProgress -->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet" type="text/css" >
    <!-- iCheck -->
    <link href="{{ asset('css/green.css') }}" rel="stylesheet" type="text/css" >
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- JQVMap -->
    <link href="{{ asset('css/jqvmap.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('css/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" >

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css" >
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="" class="site_title"><img src="{{asset('images/logo.png')}}" height="30" width="30"> <span>Mobil Hotel Admin</span></a>
                </div>

                <div class="clearfix"></div>
                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">


                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><a><i class="fa fa-user-plus"></i> New Customer</a>
                            </li>
                            <li>
                                <a><i class="fa fa-bed"></i> Rooms</a>
                            </li>
                            <li>
                                <a><i class="fa fa-users"></i> Users </a>
                            </li>
                            <li>
                                <a><i class="fa fa-cutlery"></i> Orders </a>
                            </li>
                            <li>
                                <a><i class="fa fa-bell-o"></i>Wake-up Service</a>
                            </li>
                            <li>
                                <a><i class="fa fa-taxi"></i>Taxi Call Service</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row" style="display: inline-block;" >
                <div class="tile_count">
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Customer</span>
                        <div class="count">35</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-bed"></i> Total Room</span>
                        <div class="count">21</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-exclamation-triangle"></i> Dirty Room</span>
                        <div class="count green">4</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-ban"></i> Banned Room</span>
                        <div class="count">2</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-check"></i>Avaible Room</span>
                        <div class="count">8</div>
                    </div>
                    <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-address-card"></i> Reserved Room</span>
                        <div class="count">10</div>
                    </div>
                </div>
            </div>

            <br />
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="clearfix"></div>

                            <div class="x_title">
                                <h4>Occupancy Rates</h4>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="panel panel-body">
                                        <div class="row d-flex justify-content-between">
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="86">
                                                     <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Pool</div>
                                            </div>
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="73">
                                                         <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Pub</div>
                                            </div>
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="60">
                                                     <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Sauna</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6" >
                                    <div class="panel panel-body">

                                             <div class="row d-flex justify-content-between">
                                            <div class="col-xs-4">
                                                 <span class="chart" data-percent="86">
                                                    <span class="percent"></span>
                                                 </span>
                                                <div class="d-flex justify-content-center">Restaurant</div>
                                            </div>
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="73">
                                                    <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Gym</div>
                                            </div>
                                            <div class="col-xs-4">
                                                 <span class="chart" data-percent="60">
                                                     <span class="percent"></span>
                                                 </span>
                                                <div class="d-flex justify-content-center">Otel</div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">

                    <div class="col-md-6 col-sm-6 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Weather Forecast</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="temperature"><b>Monday</b>, 07:30 AM
                                            <span>F</span>
                                            <span><b>C</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="weather-icon">
                                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="weather-text">
                                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="weather-text pull-right">
                                        <h3 class="degrees">23</h3>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="row weather-days">
                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">Mon</h2>
                                            <h3 class="degrees">25</h3>
                                            <canvas id="clear-day" width="32" height="32"></canvas>
                                            <h5>15 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">Tue</h2>
                                            <h3 class="degrees">25</h3>
                                            <canvas height="32" width="32" id="rain"></canvas>
                                            <h5>12 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">Wed</h2>
                                            <h3 class="degrees">27</h3>
                                            <canvas height="32" width="32" id="snow"></canvas>
                                            <h5>14 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">Thu</h2>
                                            <h3 class="degrees">28</h3>
                                            <canvas height="32" width="32" id="sleet"></canvas>
                                            <h5>15 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">Fri</h2>
                                            <h3 class="degrees">28</h3>
                                            <canvas height="32" width="32" id="wind"></canvas>
                                            <h5>11 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">Sat</h2>
                                            <h3 class="degrees">26</h3>
                                            <canvas height="32" width="32" id="cloudy"></canvas>
                                            <h5>10 <i>km/h</i></h5>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Current Exchange Information </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                            <div class=" col-md-12 pb-2">
                                <div class="col-md-12 d-flex justify-content-around">
                                    <div class="col-md-2 card">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-dollar fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Dollar</span>
                                            <div class="card-text"> 8 ₺ </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-euro fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Euro</span>
                                            <div class="card-text">10 ₺</div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-gbp fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Pound</span>
                                            <div class="card-text">10 ₺</div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-yen fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Yen</span>
                                            <div class="card-text">10</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:35px;" class="d-flex justify-content-center">
                                            <i class=""><span>&#x62f;&#x2e;&#x625;</span></i>
                                        </div>
                                        <div class="card-body">
                                            <span>AED</span>
                                            <div class="card-text">10 ₺</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:40px;" class="d-flex justify-content-center">
                                            <i class=""><span>&#x6b;&#x72;</span></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Krona</span>
                                            <div class="card-text">2 ₺</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=" col-md-12 pb-2">
                                    <div class="col-md-12 d-flex justify-content-around">
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#8381</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Rouble</span>
                                                <div class="card-text">4 ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#20803</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Yuan</span>
                                                <div class="card-text">3 ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#8380</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Manat</span>
                                                <div class="card-text">4₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#65020</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Riyal</span>
                                                <div class="card-text">12 ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:50px;" class="d-flex justify-content-center mt-2">
                                                <i class="fab fa-ethereum"></i>
                                            </div>
                                            <div class="card-body">
                                                <span>ETH</span>
                                                <div class="card-text">16000  ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:50px;" class="d-flex justify-content-center mt-2">
                                                <i class="fab fa-bitcoin"></i>
                                            </div>
                                            <div class="card-body">
                                                <span>BTC</span>
                                                <div class="card-text">400000 ₺</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>

        </div>



    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('js/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('js/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('js/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('js/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('js/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('js/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('js/jquery.flot.js') }}"></script>
<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('js/jquery.flot.time.js') }}"></script>
<script src="{{ asset('js/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('js/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('js/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('js/jquery.vmap.js') }}"></script>
<script src="{{ asset('js/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('js/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- easy-pie-chart -->
<script src="{{ asset('js/jquery.easypiechart.js') }}"></script>


</body>
</html>

