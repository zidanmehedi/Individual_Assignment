<?php

namespace App\Http\Controllers;

use App\vehicle;
use App\category;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = category::all();
        return view('admin.vehicleAdd.content', ['cat'=>$cat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
        
    {
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->get();
        if($req->session()->get('id')==1)
        {
            return view('admin.vehicleList.content', ['veh'=>$veh]);
        }
        return view('member.vehicleList.content', ['veh'=>$veh]);
        //print_r($veh);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        $val = $request->validated();
        if($val==null){
            return back()->withErrors($val)->withInput();
        }
        else{
            $cat = category::where('cat_name',$request->category)->first();
            $file = $request->file('img');
            $veh = new vehicle();
            $veh->image = $file->getClientOriginalName();
            $veh->vname = $request->name;
            $veh->description = $request->description;
            $veh->cost = $request->cost;
            $veh->cat_id = $cat->cat_id;
            $veh->save();
            $file->move('upload', $file->getClientOriginalName());
            return redirect()->route('home.admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req,$vehicle)
    {
        $veh = DB::table('vehicles')
                 ->join('category','vehicles.cat_id','=','category.cat_id')
                 ->where('vehicles.vid',$vehicle)
                 ->first();
        if($req->session()->get('id')==1){
            return view('admin.vehicleDetails.content', ['veh'=>$veh]);
        }
        return view('member.vehicleDetails.content', ['veh'=>$veh]);
        //print_r($veh);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehicle)
    {
        vehicle::destroy($vehicle);
        //echo $getUser->name;
        return redirect('vehicle/create');
    }
}
