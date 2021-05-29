@include('header')
@include('navigation')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Rooms</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="container">

                @foreach ($data as $rooms)
                <div class="row">
                    <div class="card-group">
                    @foreach($rooms as $room)
                       @if($room['room']['isBook']==1)
                            <div class="col ">
                                <div class="card text-white bg-danger mb-3 " style="max-width: 18rem;">
                                    <div class="col-md-12 card-header ">
                                        <div class="col-md-11 row"><h6>Room Number {{$room['room']['room_number']}}</h6></div>
                                        <div class="col-md-1 row"> <a href="{{url('customerCheckOut/'.$room['room']['id'].'/'.$room['room']['room_number'])}}"><i class="fa fa-sign-out fa-2x" aria-hidden="true"  style="color:white"></i></a></div>
                                    </div>
                                    <div class="card-body">
                                        @foreach($room['user']['user'] as  $r )
                                            <h6>{{$r['nameSurname']}}</h6>
                                        @endforeach
                                        <p>Entry Date : {{$room['user']['entry']}} </br>
                                            Entry Date : {{$room['user']['exit']}} </br>
                                            Amount :  {{$room['user']['amount']}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                       @elseif($room['room']['isClean']==1)
                            <div class="col">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><h6>Room Number {{$room['room']['room_number']}}</h6></div>
                                    <img class="card-img-top" src="{{$room['room']['url']}}">
                                    <div class="card-body">
                                        <h5 class="card-title">Avaible</h5>
                                    </div>
                                </div>
                            </div>
                        @elseif($room['room']['isActive']==0)
                            <div class="col">
                                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                    <div class="col-md-12 card-header ">
                                        <div class="col-md-11 row"><h6>Room Number {{$room['room']['room_number']}}</h6></div>
                                        <div class="col-md-1 row"> <i class="fa fa-refresh fa-2x" ></i></div>
                                        <div class="col-md-1 row"> <a href="{{url('changeFaultToClean/'.$room['room']['id'])}}"><i class="fa fa-refresh fa-2x" ></i></a></div>

                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        @elseif($room['room']['isClean']==0 && $room['room']['isBook']==0 )
                            <div class="col">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                    <div class="col-md-12 card-header ">
                                        <div class="col-md-11 row"><h6>Room Number {{$room['room']['room_number']}}</h6></div>
                                        <div class="col-md-1 row"> <a href="{{url('changeDirtyToClean/'.$room['room']['id'])}}"><i class="fa fa-hourglass fa-2x" ></i></a></div>

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                       @endif
                    @endforeach
                </div>
                </div>
               @endforeach


        </div>

</div>
<!-- /page content -->
</div>
@include('footer')
