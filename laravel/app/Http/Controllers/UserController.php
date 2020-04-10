<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reg.content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::where('tid',2)->get();
        return view('admin.memberList.content', ['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        $val = $request->validated();
        if($val==null){
            return back()->withErrors($val)->withInput();
        }
        else{
            $user = new user();
            $user->username=$request->username;
            $user->password=$request->password;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->contact=$request->contact;
            $user->address=$request->address;
            $user->tid=$request->role;
            $user->save();
            $request->session()->flash('success','Congratulation! Registration Successful');
            return redirect()->route('login.index');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $getUser = user::find($user);
        //echo $getUser->name;
        return view('admin.memberDetails.content', $getUser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $user)
    {
        $val = $request->validated();
        if($val==null){
            return back()->withErrors($val)->withInput();
        }
        else{
            $user = user::find($user);
            $user->name=$request->name;
            $user->email=$request->email;
            $user->contact=$request->contact;
            $user->address=$request->address;
            $user->save();
            $request->session()->flash('update','Congratulation! Update Successful');
            if($request->session()->get('id')==1){
                return redirect()->route('home.admin');
            }
            return redirect()->route('home.member');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        user::destroy($user);
        //echo $getUser->name;
        return redirect('user/create');
    }
}
