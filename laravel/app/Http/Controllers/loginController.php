<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
//use Validator;
use App\Http\Requests\LoginRequest;

class loginController extends Controller
{
    public function index(){
        return view('login.content');
    }
    
    public function verify(LoginRequest $req){
        $val = $req->validated();
        if($val==null){
            return back()->withErrors($val)->withInput();
        }
        else{
            $user = user::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();
            if($user!=null){
                if($user->tid=="1"){
                     return redirect()->route('home.admin');
                }
                return redirect()->route('home.member');
                }
            $req->session()->flash('msg', 'Invalid Userid/Password');
            return redirect()->route('login.index');
            }
        }
}
