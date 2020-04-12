<?php

namespace App\Http\Controllers;

use App\vehicle;
use App\category;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;
use Illuminate\Support\Facades\DB;


class vehicleUpdateController extends Controller
{
      public function admin(Request $req,$vehicle)
    {
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->where('vehicles.vid',$vehicle)
                 ->first();
            return view('admin.vehicleUpdate.content', ['veh'=>$veh]);
    }
    public function acarlist(Request $req)
    {
        $cat = category::all();
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->get();
        return view('admin.vehicleList.content', ['veh'=>$veh, 'cat'=>$cat]);
        //print_r($cat);
    }
    
    public function avlist(Request $req)
    {
        $getCat = $req->category;
        $cat = category::all();
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->where('vehicles.cat_id',$getCat)
                 ->get();
        if($req->session()->get('id')==2){
            return view('member.vehicleList.content', ['veh'=>$veh, 'cat'=>$cat]);
        }
        return view('admin.vehicleList.content', ['veh'=>$veh, 'cat'=>$cat]);
        //print($veh);
    }
     public function mcarlist(Request $req)
    {
        $cat = category::all();
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->where('status','available')
                 ->get();
        return view('member.vehicleList.content', ['veh'=>$veh, 'cat'=>$cat]);
        //print_r($cat);
    }
    
    public function mvlist(Request $req)
    {
        $getCat = $req->category;
        $cat = category::all();
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->where('vehicles.cat_id',$getCat)
                 ->get();
        return view('member.vehicleList.content', ['veh'=>$veh, 'cat'=>$cat]);
        //print($veh);
    }
}
