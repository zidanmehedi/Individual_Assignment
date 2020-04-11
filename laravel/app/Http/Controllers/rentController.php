<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rentController extends Controller
{
    public function rent(Request $req){
    	$time = $req->time;
    	return view('member.rentVehicle.content', $time)
    }
}
