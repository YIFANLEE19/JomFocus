<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
use App\Users;
use App\Models\User;
use App\Models\News;
use Auth;

class NewsController extends Controller
{
    // show news
    public function index(){
        return view('admin.news');
    }
    // store
    public function store(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeNews = News::create([
            'title'=>$r->newsTitle,
            'content'=>$r->newsContent,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        Session::flash('success',"news create successfully!");
        return back();
    }
    // show news in user view
    public function show(){
        $news = DB::table('news')
        ->latest()
        ->get();
        return view('news')->with('news',$news);
    }
    // show news detail in user view
    public function showNewsDetail($id){
        $news = News::all()->where('id',$id);
        return view('newsContent')->with('news',$news);
    }
    //show news in admin view
    public function showNews(){
        $news = DB::table('news')
        ->latest()
        ->get();
        return view('admin.newsList')->with('news',$news);
    }
    // delete news
    public function delete($id){
        $news = News::find($id);
        $news->delete();
        Session::flash('success',"news delete successfully!");
        return redirect()->route('admin.newsList');
    }
    public function edit($id){
        $news = News::all()->where('id',$id);
        return view('admin.editNews')->with('news',$news);
    }
    public function update(){
        $r=request();
        $news= News::find($r->newsID);
        $currentTime = Carbon::now("GMT+8");
        $news->title=$r->newsTitle;
        $news->content=$r->newsContent;
        $news->time=$currentTime->toDateTimeString();
        $news->save();
        return redirect()->route('admin.newsList');
    }
    public function uploadPhoto(Request $request){
        $news = new News();
        $news->id=0;
        $news->exists = true;
        $image = $news->addMediaFromRequest('upload')->toMediaCollection('/public/images');
        
        return response()->json([
            'url' =>$image->getUrl()
        ]);
    }
    // search admin
    public function search(){
        $r=request();
        $keyword=$r->keyword;
        $news = DB::table('news')
        ->where('news.title','like','%'.$keyword.'%')      
        ->latest()
        ->get();
        return view('admin.newsList')->with('news',$news);
    }

}
