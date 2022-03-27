<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Users;
use App\Models\User;
use App\Models\Feedback;
use App\Models\News;
use Auth;

class UserController extends Controller
{
    //
    public function edit(){
        if(Auth::check()){
            return view('user.edit')->with('user',auth()->user());
        }else{
            return back();
        }
    }
    public function update(){
        $r=request();
        $user = auth()->user();
        $user->name=$r->username;
        $user->save();
        return view('/welcome');
    }
    public function showUser(){
        $users = DB::table('users')
        ->where('is_admin','=','0')
        ->latest()
        ->get();
        return view('admin.userList')->with('users',$users);
    }
    public function showAdmin(){
        $admins = DB::table('users')
        ->where('is_admin','=','1')
        ->latest()
        ->get();
        return view('admin.adminList')->with('admins',$admins);
    }
    public function deleteUser($id){
        $user=User::find($id);
        $user->delete();
        Session::flash('success',"user delete successfully!");
        return redirect()->route('admin.userList');
    }
    public function deleteAdmin($id){
        $admin=User::find($id);
        $admin->delete();
        Session::flash('success',"admin create successfully!");
        return redirect()->route('admin.adminList');
    }

    // search user
    public function userSearch(){
        $r=request();
        $keyword=$r->keyword;
        $users = DB::table('users')
        ->where('is_admin','=','0')
        ->where('users.name','like','%'.$keyword.'%')      
        ->latest()
        ->get();
        return view('admin.userList')->with('users',$users);
    }
    // search admin
    public function adminSearch(){
        $r=request();
        $keyword=$r->keyword;
        $admins = DB::table('users')
        ->where('is_admin','=','1')
        ->where('users.name','like','%'.$keyword.'%')    
        ->latest()
        ->get();
        return view('admin.adminList')->with('admins',$admins);
    }
}