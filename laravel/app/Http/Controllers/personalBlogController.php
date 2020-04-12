<?php

namespace App\Http\Controllers;

use App\blog;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personalBlogController extends Controller
{
   	public function index(Request $req){
   		$blog = DB::table('blogs')->join('user_info','user_info.id','blogs.uid')->where('uid',$req->session()->get('id'))->get();
        return view('member.myBlog.content', ['blog'=>$blog]);
   	}
}
