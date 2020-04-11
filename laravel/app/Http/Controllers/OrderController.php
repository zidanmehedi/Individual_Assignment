<?php

namespace App\Http\Controllers;

use App\order;
use App\vehicle;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.payment.content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $order = DB::table('orders')
                    ->join('vehicles','orders.vid','=','vehicles.vid')
                    ->join('user_info','user_info.id','=','orders.uid')
                    ->where('uid',$req->session()->get('id'))
                    ->get();
        //print_r($order);
        return view('member.orderHistory.content', ['order'=>$order]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $pay = $req->pay;
        //echo $pay;
        $order = new order();
        $order->uid = $req->session()->get('id');
        $order->vid = $req->session()->pull('vid');
        $order->period = $req->session()->pull('time');
        $order->time = $req->session()->pull('date');
        $order->total_cost = $req->session()->pull('tcost');
        $order->payment = $pay;
        //print_r($order);
        $order->save();
        return redirect()->route('home.member'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req, $order)
    {
        //$time = $req->session()->get('time');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
