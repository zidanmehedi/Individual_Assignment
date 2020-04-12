@extends('member/payment/index')


@section('content')
<div class="container">
    <div class="row  mt-5 justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Vehicle Info</strong></label>
                </div>
                <div style="padding:10px;">

                    <div class="row">
                        <div class="col">
                            <form method="post">
                                @csrf()
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="inlineRadio1" value="Cash On Delivery" onclick="check()">
                                    <label class="form-check-label" for="inlineRadio1">Cash On Delivery</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="inlineRadio2" value="bKash" onclick="check()">
                                    <label class="form-check-label" for="inlineRadio2">bKash</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="inlineRadio3" value="Rocket" onclick="check()">
                                    <label class="form-check-label" for="inlineRadio3">Rocket</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="inlineRadio3" value="Nogod" onclick="check()">
                                    <label class="form-check-label" for="inlineRadio3">Nogod</label>
                                </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group mt-4" style=" width:100%">
                                <input class="btn btn-success btn-sm" type="submit" name="checkout" value="Chekout">
                                </form> &emsp;
                                <button class=" btn btn-danger btn-sm" onclick="backToCarList()" style='padding-left:-50px'>Cancel</button>
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
Filalize Order
@endsection
