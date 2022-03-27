<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Models\Todolist;
use Auth;


class TodoController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');//construct require user login before access the controller function
    }

    public function store(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeToDo = Todolist::create([
            'userID'=>Auth::id(),
            'title'=>$r->todoTitle,
            'content'=>$r->todoContent,
            'time'=>$currentTime->toDateTimeString(),
        ]);
        return back();
    }
    public function show(){
        $todolists = DB::table('todolists')
        ->where('userID','=',Auth::id())
        ->latest()
        ->get();
        return view('todoApp.todolist')->with('todolists',$todolists);
    }
    public function delete($id){
        $todolists=Todolist::find($id);
        $todolists->delete();
        return back();
    }
}
