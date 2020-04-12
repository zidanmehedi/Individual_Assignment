@extends('member/vehicleDetails/index')


@section('content')
<div class="container">
    <div class="row mt-5 justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Vehicle Info</strong></label>
                </div>
                <div style="padding:10px;">

                    <div class="row mt-4 mb-4">
                        <div class="col">
                            <form action="{{url('/vehicle/rent')}}" method="post">
                                @csrf()
                                <div class="form-group" style="text-align:center">
                                    <img src="/upload/{{$veh->image}}" alt="image" height="128px" width="256px" style="border:2px solid black;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.19), 0 6px 20px 0 rgba(0, 0, 0, 0.50) ">
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$veh->vname}} " readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Cost/Hour</label>
                                <input type="text" class="form-control" name="cost" value="{{$veh->cost}}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Description</label>
                        <textarea name="desription" class="form-control" rows="3" readonly>{{$veh->description}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="contact">Category</label>
                                <input type="text" class="form-control" name="category" value="{{$veh->cat_name}}" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="contact">Rend Period(Hour)</label>
                                <input type="text" class="form-control" name="time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="vid" value="{{$veh->vid}}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group mt-4" style=" width:100%">
                                <input class="btn btn-success btn-sm" type="submit" name="rent" value="Rent">
                                </form>&emsp;
                                <button class=" btn btn-primary btn-sm" onclick="backToCarList()" style='padding-left:-50px'>Back</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Admin Home
@endsection
