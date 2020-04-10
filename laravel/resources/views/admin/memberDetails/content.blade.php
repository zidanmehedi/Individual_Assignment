@extends('admin/home/index')


@section('content')
<div class="container">
    <div class="row">
        <div class="mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Account Info</strong></label>
                </div>
                <div style="padding:10px;">
                    <form action="{{url('user/'.$id)}}" method="post">
                        @csrf()
                        @method('DELETE')

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="enamemail" value="{{$name}} " readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{$email}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" rows="3" readonly>{{$address}}</textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input type="text" class="form-control" name="contact" value="{{$contact}}" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$username}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col">
                                <div class="form-group mt-4" style=" width:100%">
                                    <input class="btn btn-primary btn-sm" type="button" name="register" value="Back" onclick="backToMemberList()">&emsp;
                                    <input class="btn btn-danger btn-sm" type="submit" name="register" value="Remove">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('title')
    Admin Home
    @endsection
