@extends('reg/index')


@section('content')
<div class="container">
    <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Registration</strong></label>
                </div>
                <div style="padding:10px;">
                    <form action="" method="post">
                        @csrf()
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Contact</label>
                                    <input type="text" class="form-control" name="contact">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="conpass">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <label for="address">Register As:</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="1">
                                    <label class="form-check-label" for="admin">Admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="2">
                                    <label class="form-check-label" for="member">Member</label>
                                </div>
                                <div class="form-group mt-4" style="text-align:center; width:100%">
                                    <input class="btn btn-primary" type="submit" name="register" value="Register" style="width:200px">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mb-4" style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:14px; color:#7D8989">
                    <label for="title">Already Registered?</label>
                    <a class="alert-link" href="{{route('login.index')}}">Login Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Registration
@endsection
