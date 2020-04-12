@extends('admin/home/index')


@section('content')
<div class="container-fluid">
    <div class="row">
          <div class="col-lg-12" style="padding:0px;">
              <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="{{route('home.admin')}}"><strong>Admin Panel</strong></a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home.admin')}}">Home</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link active" href="{{url('vehicle')}}">Add Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('update.carlist')}}">Car List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user/create')}}">Member List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('order/create')}}">All Orders</a>
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
                   <div class="mt-4" style="text-align:center;font-size:30px"><strong>Members List</strong></div>
                    <table class="table table-sm table-light table-hover mt-4" style="text-align:center">
                        <thead class="thead-light">
                            <tr>
                                <th>UserId</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->username}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->contact}}</td>
                                <td><a class="nav-link" href="{{url('user/'.$user->id)}}">View</a></td>
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
Admin Home
@endsection
