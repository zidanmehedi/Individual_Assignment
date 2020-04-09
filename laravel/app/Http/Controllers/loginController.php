<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login.content');
    }
    
    public function verify(Request $req){
        if($req->username=="admin"){
            return redirect()->route('home.admin');
        }
        return redirect()->route('home.member');
    }
}
