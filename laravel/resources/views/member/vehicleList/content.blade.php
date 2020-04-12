@extends('member/vehicleList/index')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="padding:0px;">
             <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="{{route('home.member')}}"><strong>Rent A Vehicle</strong></a>
                <ul class="nav justify-content-end">
                   <li class="nav-item">
                        <a class="nav-link active" href="{{route('home.member')}}">Home</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link active" href="{{route('profile.member')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('vehicle/create')}}">Vehicle List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('order/create')}}">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('blog')}}">Post Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('blog/create')}}">Blog</a>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Cost/hour</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($veh as $v)
                            <tr>
                                <td><img src="/upload/{{$v->image}}" alt="vehicle" height="60px" width="100px" style="border:2px solid black;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.19), 0 6px 20px 0 rgba(0, 0, 0, 0.50) "></td>
                                <td>{{$v->vname}}</td>
                                <td>{{$v->cat_name}}</td>
                                <td>{{$v->cost}}</td>
                                <td><a class="nav-link" href="{{url('vehicle/'.$v->vid)}}">View</a></td>
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
