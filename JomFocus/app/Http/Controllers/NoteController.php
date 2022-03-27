<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Notebook;
use App\Models\Note;
use Auth;

class NoteController extends Controller
{
    //
    public function store(){
        $r = request();
        //image
        $image=$r->file('noteImage');  
        $image->move('images',$image->getClientOriginalName());   //images is the location       
        $imageName=$image->getClientOriginalName();
        //image
        $storeNote = Note::create([
            'notebookID'=>$r->notebookID,
            'title'=>$r->noteTitle,
            'image'=>$imageName,
            'body'=>$r->noteBody,
        ]);
        return back();
    }
    public function removeNote($id){
        $note= Note::find($id);
        $note->delete();
        return back();
    }
    public function showNoteDetail($id){
        $notes = Note::all()->where('id',$id);
        return view('notebookSystem.noteDetail')->with('notes',$notes);
    }
    public function editNote($id){
        $notes = Note::all()->where('id',$id);
        return view('notebookSystem.noteDetail')->with('notes',$notes);
    }
    public function updateNote(){
        $r=request();
        $note= Note::find($r->noteID);
        if($r->file('noteImage')!=''){
            $image=$r->file('noteImage');  
            $image->move('images',$image->getClientOriginalName());   //images is the location       
            $imageName=$image->getClientOriginalName();
            $note->image=$imageName;
        }
        $note->notebookID=$r->notebookID;
        $note->title=$r->noteTitle;
        $note->body=$r->noteBody;
        $note->save();
        return back();
    }
    public function uploadPhoto(Request $request){
        $note = new Note();
        $note->id=1;
        $note->exists = true;
        $image = $note->addMediaFromRequest('upload')->toMediaCollection('/public/images');
        
        return response()->json([
            'url' =>$image->getUrl()
        ]);
    }
}
