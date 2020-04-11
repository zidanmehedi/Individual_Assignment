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
    	$req->session()->flash('time',$req->time);
    	$req->session()->flash('vid',$req->vid);
    	$req->session()->flash('tcost',$req->tcost);
    	$req->session()->flash('category',$req->category);
    	$req->session()->flash('date', date('Y-m-d'));
    	return view('member.payment.content');
    	//print_r($info);
    	//print_r($req->session()->all());
    }
}
