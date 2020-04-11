@extends('admin/home/index')


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
                        <a class="nav-link" href="{{url('blog')}}">Post Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('blog/create')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
                    </li>
                </ul>
            </nav>        </div>
        <div class="container">
            <div class="row">
                @if(session()->has('update'))
                <div class="alert alert-success alert-dismissible fade show col mt-5">{{session('update')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @else
                <div class="alert alert-success alert-dismissible fade show col mt-5">Welcome {{session('username')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
            <div class="row">
                <div class='col col-lg-4 col-sm-12 mt-3'>
                    <div style="border:1px solid white; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                        <table class="table table-borderless" style="text-align:center; font-family:arial">
                            <tbody>
                                <tr>
                                    <td>
                                        <h3><strong>{{$name}}</strong></h3><br>{{$email}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="1px" class="table">
                                            <tr>
                                                <td>Username</td>
                                                <td>:</td>
                                                <td>{{$username}}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>:</td>
                                                <td>{{$address}}</td>
                                            </tr>
                                            <tr>
                                                <td>Contact</td>
                                                <td>:</td>
                                                <td>{{$contact}}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class='col-lg-1 col-sm-12'></div>
                <div class="col-lg-7 mt-3 mb-5">
                    <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                        <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                            <label for="title"><strong>Account Info</strong></label>
                        </div>
                        <div style="padding:10px;">
                            <form action="{{url('user/'.session('id'))}}" method="post">
                                @csrf()
                                @method('PATCH')
                                <div class="row">
                                    <div class="col">
                                        @if($errors->has('name'))
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" style="border-color:red">
                                            <small class="form-text">
                                                <font color='red'>* {{$errors->first('name')}}</font>
                                            </small>
                                        </div>
                                        @else
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$name}}">
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        @if($errors->has('email'))
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" style="border-color:red">
                                            <small class="form-text">
                                                <font color='red'>* {{$errors->first('email')}}</font>
                                            </small>
                                        </div>
                                        @else
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$email}}">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @if($errors->has('address'))
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" class="form-control" rows="3" style="border-color:red"></textarea>
                                    <small class="form-text">
                                        <font color='red'>* {{$errors->first('address')}}</font>
                                    </small>
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" class="form-control" rows="3">{{$address}}</textarea>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col">
                                        @if($errors->has('contact'))
                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input type="text" class="form-control" name="contact" style="border-color:red">
                                            <small class="form-text">
                                                <font color='red'>* {{$errors->first('contact')}}</font>
                                            </small>
                                        </div>
                                        @else
                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input type="text" class="form-control" name="contact" value="{{$contact}}">
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        @if($errors->has('username'))
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" style="border-color:red">
                                            <small class="form-text">
                                                <font color='red'>* {{$errors->first('username')}}</font>
                                            </small>
                                        </div>
                                        @else
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" value="{{$username}}" readonly>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="form-group mt-4" style=" width:100%">
                                            <input class="btn btn-primary btn-sm" type="submit" name="register" value="Update" style="width:100px">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Member Home
@endsection
