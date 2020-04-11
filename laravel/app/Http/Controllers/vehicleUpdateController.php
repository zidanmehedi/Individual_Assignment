<?php

namespace App\Http\Controllers;

use App\vehicle;
use App\category;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;
use Illuminate\Support\Facades\DB;


class vehicleUpdateController extends Controller
{
      public function index(Request $req,$vehicle)
    {
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->where('vehicles.vid',$vehicle)
                 ->first();
            return view('admin.vehicleUpdate.content', ['veh'=>$veh]);
    }
    public function carlist(Request $req)
    {
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->get();
        return view('admin.vehicleList.content', ['veh'=>$veh]);
        //print_r($veh);
    }
}
