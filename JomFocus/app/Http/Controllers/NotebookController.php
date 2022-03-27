<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Models\Notebook;
use App\Models\Note;
use Auth;

class NotebookController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');//construct require user login before access the controller function
    }
    public function store(){
        $currentTime = Carbon::now("GMT+8");
        $r = request();
        $storeNotebook = Notebook::create([
            'userID'=>Auth::id(),
            'title'=>$r->notebookTitle,
        ]);
        return back();
    }
    public function show(){
        $notebooks = DB::table('notebooks')
        ->where('userID','=',Auth::id())
        ->latest()
        ->get();
        return view('notebookSystem.notebook')->with('notebooks',$notebooks);
    }
    public function removeNotebook($id){
        $note= Note::where('notebookID',$id);
        $notebooks=Notebook::find($id);
        $note->delete();
        $notebooks->delete();
        return back();
    }
    public function openNote($id){
        $notebooks=Notebook::all()->where('id',$id);
        $notes= Note::all()->where('notebookID',$id);
        return view('notebookSystem.note')
        ->with('notebooks',$notebooks)
        ->with('notes',$notes);
    }
}
