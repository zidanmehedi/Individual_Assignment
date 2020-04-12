@extends('admin/categoryAdd/index')


@section('content')
<div class="container">
    <div class="row mt-5 justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Add Category</strong></label>
                </div>
                <div style="padding:10px;">
                    <form class="form-inline" method="post">
                        @csrf()
                        <div class="col">
                            <div style="float:right">
                                <label for="newcat">New Category</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="addnewcat" class="sr-only">New Category</label>
                                <input name="newcat" type="text" style="box-sizing: border-box;border:1px solid #D3D3D3;padding:5px;border-radius:4px">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="padding:5px">Add</button>
                        </div>
                    </form>
                </div>
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:14px; color:#7D8989">
                    <label for="title">Want Add a Vehicle?</label>
                    <a class="alert-link" href="{{url('vehicle')}}">Add Vehicle</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Add Category
@endsection
