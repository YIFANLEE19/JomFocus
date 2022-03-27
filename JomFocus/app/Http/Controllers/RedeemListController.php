<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\Reward;
use App\Models\RedeemList;
use Carbon\Carbon;

class RedeemListController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');//construct require user login before access the controller function
    }
    public function index(){
        return view('shop.rewardList');
    }
    // search reward in rewardList
    public function search(){
        $r=request();
        $keyword=$r->keyword;
        $rewards = DB::table('rewards')
        ->where('rewards.name','like','%'.$keyword.'%')       
        ->latest()
        ->get();
        return view('shop.rewardList')->with('rewards',$rewards);
    }
    public function redeem($id){
        $rewards = Reward::all()->where('id',$id);
        return view('shop.confirmRedeem')->with('rewards',$rewards);
    }
    public function confirmRedeem(){
        $r=request();
        $currentTime = Carbon::now("GMT+8");
        $storeRedeemRecord = RedeemList::create([
            'rewardID'=>$r->rewardID,
            'rewardName'=>$r->rewardName,
            'userID'=>Auth::id(),
            'time'=>$currentTime->toDateTimeString(),
        ]);
        $user = auth()->user();
        $rewards= Reward::find($r->rewardID);
        $rewards->quantity = $r->rewardQuantity;
        $user->points=$r->userPoint;
        $user->save();
        $rewards->save();
        Session::flash('success',"reward redeem successfully!");
        return back();
    }
    public function myReward(){
        return view('shop.myReward');
    }
    public function showMyReward(){
        $showReward = DB::table('redeem_lists')
        ->where('userID','=',Auth::id())
        ->leftjoin('rewards','rewards.id','=','redeem_lists.rewardID')
        ->select('redeem_lists.*','rewards.code as rCode','rewards.image as rImage')
        ->get();
        return view('shop.myReward')->with('redeem_lists',$showReward);
    }
}
