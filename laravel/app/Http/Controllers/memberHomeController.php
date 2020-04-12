<?php

namespace App\Http\Controllers;

use App\vehicle;
use App\category;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;
use Illuminate\Support\Facades\DB;

class memberHomeController extends Controller
{
     public function index(Request $req)
     {
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->get();
        return view('member.generalPage.content', ['veh'=>$veh]);
        //print_r($veh);
     }
}
