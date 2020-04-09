<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function adminIndex(){
        return view('admin.home.content');
    }
    public function memberIndex(){
        return view('member.home.content');
    }
    
}
