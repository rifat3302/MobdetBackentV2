@include('header')
@include('navigation')
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
                                                <span class="chart" data-percent="{{$occupancyRates['pool']['percent']}}">
                                                     <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Pool &nbsp;<span STYLE="font-weight:bold"> {{ $occupancyRates['pool']['ca'] }}</span>|<span>{{ $occupancyRates['pool']['co'] }}</span></div>
                                            </div>
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="{{$occupancyRates['pub']['percent']}}">
                                                         <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Pub&nbsp;<span STYLE="font-weight:bold"> {{ $occupancyRates['pub']['ca'] }}</span>|<span>{{ $occupancyRates['pub']['co'] }}</span></div>

                                            </div>
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="{{$occupancyRates['sauna']['percent']}}">
                                                     <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Sauna&nbsp;<span STYLE="font-weight:bold"> {{ $occupancyRates['sauna']['ca'] }}</span>|<span>{{ $occupancyRates['sauna']['co'] }}</span></div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6" >
                                    <div class="panel panel-body">

                                             <div class="row d-flex justify-content-between">
                                            <div class="col-xs-4">
                                                 <span class="chart" data-percent="{{$occupancyRates['restaurant']['percent']}}">
                                                    <span class="percent"></span>
                                                 </span>
                                                <div class="d-flex justify-content-center">Restaurant&nbsp;<span STYLE="font-weight:bold"> {{ $occupancyRates['restaurant']['ca'] }}</span>|<span>{{ $occupancyRates['restaurant']['co'] }}</span></div>

                                            </div>
                                            <div class="col-xs-4">
                                                <span class="chart" data-percent="{{$occupancyRates['gym']['percent']}}">
                                                    <span class="percent"></span>
                                                </span>
                                                <div class="d-flex justify-content-center">Gym &nbsp;<span STYLE="font-weight:bold"> {{ $occupancyRates['gym']['ca'] }}</span>|<span>{{ $occupancyRates['gym']['co'] }}</span></div>

                                            </div>
                                            <div class="col-xs-4">
                                                 <span class="chart" data-percent="{{$occupancyRates['hotel']['percent']}}">
                                                     <span class="percent"></span>
                                                 </span>
                                                <div class="d-flex justify-content-center">Otel&nbsp;<span STYLE="font-weight:bold"> {{ $occupancyRates['hotel']['ca'] }}</span>|<span>{{ $occupancyRates['hotel']['co'] }}</span></div>

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
                                        <div class="temperature"><b>{{$wheatherData['Day6']['Day']}}</b>, {{$wheatherData['Day6']['Hour']}}
                                            <span><b>C</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="weather-icon">
                                            <img src="{{asset('images/'.$wheatherData['Day6']['imagePath'])}}" width="84px" height="84px">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="weather-text">
                                            <h2>{{$wheatherData['Day6']['location']}}<br><i>Partly Cloudy Day</i></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="weather-text pull-right">
                                        <h3 class="degrees">{{ $wheatherData['Day6']['temperature'] }}</h3>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="row weather-days d-flex justify-content-between">

                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">{{ $wheatherData['Day1']['Day'] }}</h2>
                                            <h4 class="degrees"><i class="fa fa-arrow-down" aria-hidden="true"></i>{{ $wheatherData['Day1']['lower'] }}</h4>
                                            <h4 class="degrees"><i class="fa fa-arrow-up" aria-hidden="true"></i>{{ $wheatherData['Day1']['higher'] }}</h4>
                                            <img src="{{asset('images/'.$wheatherData['Day1']['imagePath'])}}" width="50px" height="50px">

                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">{{ $wheatherData['Day2']['Day'] }}</h2>
                                            <h4 class="degrees"><i class="fa fa-arrow-down" aria-hidden="true"></i>{{ $wheatherData['Day2']['lower'] }}</h4>
                                            <h4 class="degrees"><i class="fa fa-arrow-up" aria-hidden="true"></i>{{ $wheatherData['Day2']['higher'] }}</h4>
                                            <img src="{{asset('images/'.$wheatherData['Day2']['imagePath'])}}" width="50px" height="50px">

                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">{{ $wheatherData['Day3']['Day'] }}</h2>
                                            <h4 class="degrees"><i class="fa fa-arrow-down" aria-hidden="true"></i>{{ $wheatherData['Day3']['lower'] }}</h4>
                                            <h4 class="degrees"><i class="fa fa-arrow-up" aria-hidden="true"></i>{{ $wheatherData['Day3']['higher'] }}</h4>
                                            <img src="{{asset('images/'.$wheatherData['Day3']['imagePath'])}}" width="50px" height="50px">

                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">{{ $wheatherData['Day4']['Day'] }}</h2>
                                            <h4 class="degrees"><i class="fa fa-arrow-down" aria-hidden="true"></i>{{ $wheatherData['Day4']['lower'] }}</h4>
                                            <h4 class="degrees"><i class="fa fa-arrow-up" aria-hidden="true"></i>{{ $wheatherData['Day4']['higher'] }}</h4>
                                            <img src="{{asset('images/'.$wheatherData['Day4']['imagePath'])}}" width="50px" height="50px">

                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="daily-weather">
                                            <h2 class="day">{{ $wheatherData['Day5']['Day'] }}</h2>
                                            <h4 class="degrees"><i class="fa fa-arrow-down" aria-hidden="true"></i>{{ $wheatherData['Day5']['lower'] }}</h4>
                                            <h4 class="degrees"><i class="fa fa-arrow-up" aria-hidden="true"></i>{{ $wheatherData['Day5']['higher'] }}</h4>
                                            <img src="{{asset('images/'.$wheatherData['Day5']['imagePath'])}}" width="50px" height="50px">

                                        </div>
                                    </div>


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
                                            <div class="card-text"> {{$currency['USD']}} ₺</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-euro fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Euro</span>
                                            <div class="card-text">{{$currency['EUR']}} ₺</div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-gbp fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Pound</span>
                                            <div class="card-text">{{$currency['GBP']}} ₺</div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:24px;" class="d-flex justify-content-center">
                                            <i class="fa fa-yen fa-2x"></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Yen</span>
                                            <div class="card-text">{{$currency['JPY']}} ₺</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:35px;" class="d-flex justify-content-center">
                                            <i class=""><span>&#x62f;&#x2e;&#x625;</span></i>
                                        </div>
                                        <div class="card-body">
                                            <span>AED</span>
                                            <div class="card-text">{{$currency['AED']}} ₺</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-2 card d-flex justify-content-center">
                                        <div style="font-size:40px;" class="d-flex justify-content-center">
                                            <i class=""><span>&#x6b;&#x72;</span></i>
                                        </div>
                                        <div class="card-body">
                                            <span>Krona</span>
                                            <div class="card-text">{{$currency['SEK']}} ₺</div>
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
                                                <div class="card-text">{{$currency['RUB']}} ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#20803</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Yuan</span>
                                                <div class="card-text">{{$currency['CNY']}} ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#8380</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Manat</span>
                                                <div class="card-text">{{$currency['AZN']}} ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:40px;" class="d-flex justify-content-center">
                                                <i class=""><span>&#65020</span></i>
                                            </div>
                                            <div class="card-body">
                                                <span>Riyal</span>
                                                <div class="card-text">{{$currency['SAR']}} ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:50px;" class="d-flex justify-content-center mt-2">
                                                <i class="fab fa-ethereum"></i>
                                            </div>
                                            <div class="card-body">
                                                <span>ETH</span>
                                                <div class="card-text">{{$currency['ethereum']}} ₺</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-2 card d-flex justify-content-center">
                                            <div style="font-size:50px;" class="d-flex justify-content-center mt-2">
                                                <i class="fab fa-bitcoin"></i>
                                            </div>
                                            <div class="card-body">
                                                <span>BTC</span>
                                                <div class="card-text">{{$currency['bitcoin']}} ₺</div>
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

@include('footer')


