<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class homeController extends Controller
{
    public function adminIndex(Request $req){
        $user = user::find($req->session()->get('id'));
        //print_r($user->name);
        return view('admin.home.content', $user);
    }
    public function memberIndex(Request $req){
        $user = user::find($req->session()->get('id'));
        return view('member.home.content', $user);
    }
    
}
