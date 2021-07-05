@include('header')
@include('navigation')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Alarms</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="container">



                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Room Number</th>
                            <th scope="col">Wake-Up-Date</th>
                            <th scope="col">Process</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($alarms as $alarm)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$alarm['room_number']}}</td>
                            <td>{{$alarm['wake_up_time']}}</td>
                            <td><a href="{{url('wakeUp/'.$alarm['room_number'])}}"><i class="fa fa-bed fa-2x" ></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>




        </div>

    </div>
    <!-- /page content -->
</div>
@include('footer')

