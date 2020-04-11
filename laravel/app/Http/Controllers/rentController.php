<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;

class rentController extends Controller
{
    public function rent(Request $req){
    	$time = $req->time;
    	$vid = $req->vid;
    	$name = $req->name;
    	$cost = $req->cost;
    	$category = $req->category;
    	return view('member.vehicleRent.content', ['data'=>['vid'=>$vid, 'time'=>$time, 'name'=>$name, 'cost'=>$cost, 'category'=>$category]]);
    	//print_r($info);
    }
     public function finalize(Request $req){
    	$req->session()->put('time',$req->time);
    	$req->session()->put('vid',$req->vid);
    	$req->session()->put('tcost',$req->tcost);
    	$req->session()->put('category',$req->category);
    	$req->session()->put('date', date('Y-m-d'));
    	return redirect('order');
    	//print_r($info);
    	//print_r($req->session()->all());
    }
}
