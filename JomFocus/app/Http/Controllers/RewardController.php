<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Users;
use App\Models\Reward;
use App\Models\RedeemList;
use Auth;

class RewardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');//construct require user login before access the controller function
    }
    //
    public function index(){
        return view('admin.addReward');
    }

    // store
    public function store(){
        $r = request();
        //image
        $image=$r->file('rewardImage');  
        $image->move('images',$image->getClientOriginalName());   //images is the location       
        $imageName=$image->getClientOriginalName();
        //image
        $storeReward = Reward::create([
            'name'=>$r->rewardName,
            'image'=>$imageName,
            'description'=>$r->rewardDescription,
            'value'=>$r->rewardValue,
            'quantity'=>$r->rewardQuantity,
            'code'=>$r->rewardCode,
        ]);
        Session::flash('success',"reward create successfully!");
        return back();
    }

    //upload image
    public function uploadPhoto(Request $request){
        $rewards = new Reward();
        $rewards->id=0;
        $rewards->exists = true;
        $image = $rewards->addMediaFromRequest('upload')->toMediaCollection('/public/images');
        return response()->json([
            'url' =>$image->getUrl()
        ]);
    }

    //show reward in admin view
    public function showRewardList(){
        $rewards = DB::table('rewards')
        ->latest()
        ->get();
        return view('admin.rewardList')->with('rewards',$rewards);
    }

    // delete reward
    public function delete($id){
        $redeemList= RedeemList::where('rewardID',$id);
        $rewards = Reward::find($id);
        $redeemList->delete();
        $rewards->delete();
        Session::flash('success',"reward delete successfully!");
        return redirect()->route('admin.rewardList');
    }
    public function edit($id){
        $rewards = Reward::all()->where('id',$id);
        return view('admin.editReward')->with('rewards',$rewards);
    }

    public function update(){
        $r=request();
        $rewards= Reward::find($r->rewardID);
        if($r->file('rewardImage')!=''){
            $image=$r->file('rewardImage');  
            $image->move('images',$image->getClientOriginalName());   //images is the location       
            $imageName=$image->getClientOriginalName();
            $rewards->image=$imageName;
        }

        $rewards->name=$r->rewardName;
        $rewards->description=$r->rewardDescription;
        $rewards->value=$r->rewardValue;
        $rewards->quantity=$r->rewardQuantity;
        $rewards->code=$r->rewardCode;
        $rewards->save();
        return redirect()->route('admin.rewardList');  
    }
    
    // search reward in rewardList
    public function search(){
        $r=request();
        $keyword=$r->keyword;
        $rewards = DB::table('rewards')
        ->where('rewards.name','like','%'.$keyword.'%')
        ->where('rewards.code','like','%'.$keyword.'%')         
        ->latest()
        ->get();
        return view('admin.rewardList')->with('rewards',$rewards);
    }
    //show reward in user view
    public function showReward(){
        $rewards = DB::table('rewards')
        ->where('rewards.quantity','!=','0')
        ->latest()
        ->get();
        return view('shop.rewardList')->with('rewards',$rewards);
    }
}
