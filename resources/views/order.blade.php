@include('header')
@include('navigation')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Orders</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                @foreach($orders as $order)
                    <div class="col-lg-3 d-flex  flex-column align-items-stretch">
                        <div class="card-group">
                            @if($order['order']['state']==1)
                            <div class="card  text-white bg-success mt-2">
                            @elseif($order['order']['state']==2)
                             <div class="card  text-white bg-warning mt-2">
                            @endif
                                <div class="card-header">Room {{$order['order']['room_number']}} || Date {{$order['order']['order_date']}} || Total {{$order['order']['total']}}</div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Count</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($order['order_details']  as $index => $od)
                                                  <tr>
                                                      <th scope="row">{{$index+1}}</th>
                                                      <td>{{$od['name']}}</td>
                                                      <td>{{$od['count']}}</td>
                                                      <td>{{$od['total']}}</td>

                                                  </tr>

                                       @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">

                                    @if($order['order']['state']==1)
                                        <div class="col-md-12">
                                            <div class="col-md-10">
                                                <h6 class="order-top">Ordered</h6>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{url('gettingReadyOrder/'.$order['order']['id'])}}">
                                                    <i class="fa fa-tasks  fa-1x" aria-hidden="true" style="color:white" ></i>
                                                </a>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{url('cancelOrder/'.$order['order']['id'])}}">
                                                    <i class="fa fa-times fa-1x" aria-hidden="true" style="color:white" ></i>
                                                </a>
                                            </div>
                                        </div>
                                    @elseif($order['order']['state']==2)
                                        <div class="col-md-12">
                                            <div class="col-md-11">
                                                <h6 class="order-top">Getting Ready</h6>
                                            </div>
                                            <div class="col-md-1">
                                                <a href="{{url('readyOrder/'.$order['order']['id'])}}">
                                                    <i class="fa fa-check fa-1x" aria-hidden="true" style="color:white" ></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif


                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
    </div>
    <!-- /page content -->
</div>
@include('footer')
