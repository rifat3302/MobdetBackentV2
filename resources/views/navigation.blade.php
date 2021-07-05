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
                                <a href="{{url('dashboard')}}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li><a href="{{url('newCustommer')}}"><i class="fa fa-user-plus"></i> New Customer</a>
                            </li>
                            <li>
                                <a href="{{url('rooms')}}" ><i class="fa fa-bed"></i> Rooms</a>
                            </li>

                            <li>
                                <a  href="{{url('orders')}}"><i class="fa fa-cutlery"></i> Orders </a>
                            </li>
                            <li>
                                <a href="{{url('getAllAlarm')}}" ><i class="fa fa-bell-o"></i>Wake-up Service</a>
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
