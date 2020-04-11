@extends('admin/vehicleAdd/index')


@section('content')
<div class="container">
    <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Add Vehicle</strong></label>
                </div>
                <div style="padding:10px;">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf()
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
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                </div>
                                @endif
                            </div>
                            <div class="col">
                                @if($errors->has('cost'))
                                <div class="form-group">
                                    <label for="cost">Cost/Hour</label>
                                    <input type="text" class="form-control" name="cost" style="border-color:red">
                                    <small class="form-text">
                                        <font color='red'>* {{$errors->first('cost')}}</font>
                                    </small>
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="cost">Cost/Hour</label>
                                    <input type="cost" class="form-control" name="cost" value="{{old('cost')}}">
                                </div>
                                @endif
                            </div>
                        </div>
                        @if($errors->has('description'))
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3" style="border-color:red"></textarea>
                            <small class="form-text">
                                <font color='red'>* {{$errors->first('description')}}</font>
                            </small>
                        </div>
                        @else
                        <div class="form-group">
                            <label for="address">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <label for="image">Select Image</label>
                                    <div style="border:1px solid black; padding:3px; border-radius:2px; border-color:#D3D3D3">
                                        <input type="file" name="img" class="form-control-file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Category">Catregory</label>
                                    <select class="form-control" name="category">
                                        <option selected>Select Category</option>
                                        @foreach($cat as $c)
                                        <option>{{$c->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group mt-4" style="text-align:center; width:100%">
                                    <input class="btn btn-primary" type="submit" name="register" value="Register" style="width:200px">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:14px; color:#7D8989">
                    <label for="title">New Category Needed?</label>
                    <a class="alert-link" href="{{url('category')}}">Add Category</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Add Vehicles
@endsection
