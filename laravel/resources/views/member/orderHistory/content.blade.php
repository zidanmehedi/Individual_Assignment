@extends('member/vehicleList/index')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="padding:0px;">
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="#"><strong>Rent A Vehicle</strong></a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('vehicle/create')}}">Vehicle List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container justify-content-lg-center">
            <div class="row">
                <div class="col">
                    <div class="mt-4" style="text-align:center;font-size:30px"><strong>Vehicles List</strong></div>
                    <table class="table table-sm table-light table-hover mt-4" style="text-align:center; vertical-align: bottom;">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Time</th>
                                <th>Total Cost</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $v)
                            <tr>
                                <td>{{$v->vname}}</td>
                                <td>{{$v->period}}</td>
                                <td>{{$v->total_cost}}</td>
                                <td>{{$v->time}}</td>
                                <td>{{$v->payment}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Vehicle List
@endsection
