@extends('admin/home/index')


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
                          <a class="nav-link active" href="{{route('update.mcarlist')}}">Vehicle List</a>
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
        <div class="container">
            <div class="row">
                <div class="alert alert-success alert-dismissible fade show col mt-5">Welcome {{session('username')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="row mt-5 mb-4">
                <div class="col" style="text-align: center">
                    <h2>Please Choose Your Vehicle</h2>
                </div>
            </div>
            @if(count($veh)==0)
            <div class="row mt-5">
                <div class="col" style="text-align: center">
                    <h2>No Vehicles Available</h2>
                </div>
            </div>
            @else
            <div class="row">
                @foreach($veh as $v)
                <div class="col col-lg-3 mt-5" style="text-align:center">
                    <div class="card border-secondary mb-3" style="max-width: 18rem; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.19), 0 6px 20px 0 rgba(0, 0, 0, 0.50)">
                        <div class="card-body text-secondary">
                            <img src="/upload/{{$v->image}}" alt="image" height="128px" width="100%" style="border:2px solid black;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.19), 0 6px 20px 0 rgba(0, 0, 0, 0.50) ">
                            <h6 class="mt-3 mb-3">{{$v->vname}}</h6>
                            <button type="button" class="btn btn-outline-info btn-sm"><a href="{{url('vehicle/'.$v->vid)}}">View</a></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('title')
Member Home
@endsection
