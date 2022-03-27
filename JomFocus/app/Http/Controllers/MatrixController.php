<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
use App\Models\IUrgent;
use App\Models\INUrgent;
use App\Models\NIUrgent;
use App\Models\NINUrgent;

class MatrixController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');//construct require user login before access the controller function
    }

    public function storeIUrgent(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeIUrgent = IUrgent::create([
            'userID'=>Auth::id(),
            'title'=>$r->importantUrgent,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        return back();
    }
    public function storeINUrgent(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeINUrgent = INUrgent::create([
            'userID'=>Auth::id(),
            'title'=>$r->importantNotUrgent,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        return back();
    }
    public function storeNIUrgent(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeNIUrgent = NIUrgent::create([
            'userID'=>Auth::id(),
            'title'=>$r->notImportantUrgent,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        return back();
    }
    public function storeNINUrgent(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeNINUrgent = NINUrgent::create([
            'userID'=>Auth::id(),
            'title'=>$r->notImportantNotUrgent,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        return back();
    }
    public function showMatrix(){
        $iUrgent=DB::table('i_urgents')
        ->select('i_urgents.*')
        ->where('i_urgents.userID','=',Auth::id())
        ->latest()
        ->get();
        $iNUrgent=DB::table('i_n_urgents')
        ->select('i_n_urgents.*')
        ->where('i_n_urgents.userID','=',Auth::id())
        ->latest()
        ->get();
        $nIUrgent=DB::table('n_i_urgents')
        ->select('n_i_urgents.*')
        ->where('n_i_urgents.userID','=',Auth::id())
        ->latest()
        ->get();
        $nINUrgent=DB::table('n_i_n_urgents')
        ->select('n_i_n_urgents.*')
        ->where('n_i_n_urgents.userID','=',Auth::id())
        ->latest()
        ->get();

        return view('fourQuadrantMatrix.matrix')
        ->with('i_urgents',$iUrgent)
        ->with('i_n_urgents',$iNUrgent)
        ->with('n_i_urgents',$nIUrgent)
        ->with('n_i_n_urgents',$nINUrgent);
    }
    public function deleteIUrgent($id){
        $iUrgent=IUrgent::find($id);
        $iUrgent->delete();
        return back();
    }
    public function deleteINUrgent($id){
        $iNUrgent=INUrgent::find($id);
        $iNUrgent->delete();
        return back();
    }
    public function deleteNIUrgent($id){
        $nIUrgent=NIUrgent::find($id);
        $nIUrgent->delete();
        return back();
    }
    public function deleteNINUrgent($id){
        $nINUrgent=NINUrgent::find($id);
        $nINUrgent->delete();
        return back();
    }
}
