<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Session;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // store feedback
    public function store(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeFeedback = Feedback::create([
            'firstName'=>$r->feedbackFirstName,
            'lastName'=>$r->feedbackLastName,
            'email'=>$r->feedbackEmail,
            'message'=>$r->feedbackMessage,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        return back();
    }
    // search feedback
    public function search(){
        $r=request();
        $keyword=$r->keyword;
        $feedbacks=DB::table('feedback')
        ->where('feedback.message','like','%'.$keyword.'%')
        ->orwhere('feedback.email','like','%'.$keyword.'%')
        ->get();
        return view('admin.feedback')->with('feedbacks',$feedbacks);
    }
    //show feedback
    public function showFeedback(){
         $feedbacks = Feedback::all();
        return view('admin.feedback')->with('feedbacks',$feedbacks);
    }
    // delete feedback
    public function deleteFeedback($id){
        $feedbacks = Feedback::find($id);
        $feedbacks->delete();
        Session::flash('success',"user feedback delete successfully!");
        return redirect()->route('admin.feedback');
    }
}
