<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Users;
use App\Models\User;

class TimerController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');//construct require user login before access the controller function
    }
    public function viewPomodoroTimer(){   
        if(Auth::check()){
            return view('timer.pomodoroTimer')->with('user',auth()->user());
        }else{
            return back();
        }
    }
    public function pClaimPoint(){
        $r=request();
        $user = auth()->user();
        $user->points=$r->userPoint;
        $user->save();
        Session::flash('success',"500 points claim successfully!");
        return redirect()->route('viewPomodoroTimer');
    }
    public function viewCountdownTimer(){
        return view('timer.countdownTimer');
    }
    public function cClaimPoint(){
        $r=request();
        $user = auth()->user();
        $user->points=$r->userPoint;
        $user->save();
        Session::flash('success',"100 points claim successfully!");
        return redirect()->route('viewCountdownTimer');
    }
}
