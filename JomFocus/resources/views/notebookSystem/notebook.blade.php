@extends('layouts.app')
@section('content')

<section id="notebookApp">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <h1 class="modeLabel">Notebook</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-2">
                <p>Create your own notebook by click <strong>ADD NEW</strong> button and enter your notebook name.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-8 text-center">
                <!-- Button trigger modal -->
                <button class="n-action-btn" data-toggle="modal" data-target="#notebookModal" id="addNotebookBtn">Add new</button>
            </div>
        </div>
        
        <div class="row mt-4">
            @if(count($notebooks))
                @foreach($notebooks as $notebook)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow mb-2 notebook" style="width: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title">{{$notebook->title}}</h3>
                                <p class="card-text">Last Update: {{$notebook->updated_at}}</p>
                                <a href="{{route('removeNotebook',['id'=>$notebook->id])}}" class="n-action-btn" id="deleteNotebookBtn">Delete</a>
                                <a href="{{route('openNote',['id'=>$notebook->id])}}" class="n-action-btn" id="openNotebookBtn">Open</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <p class="promptText">No any notebook right now, Please add new notebook.</p>
                </div>
            @endif
        </div>

        <!-- Modal -->
        <div class="modal fade" id="notebookModal" tabindex="-1" aria-labelledby="notebookModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notebookModalLabel">Notebook Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('storeNotebook') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="notebookTitle">Name</label>
                                <input type="text" class="form-control" id="notebookTitle" name="notebookTitle">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.title="Notebook | Jom Focus";
    const clickSound = new Audio('/sound/clicksoundeffect.mp3');
    const addNotebookBtn = document.getElementById('addNotebookBtn');
    const openNotebookBtn = document.getElementById('openNotebookBtn');
    const deleteNotebookBtn = document.getElementById('deleteNotebookBtn');
    addNotebookBtn.addEventListener('click',function(){
        clickSound.play();
    });
    openNotebookBtn.addEventListener('click',function(){
        clickSound.play();
    });
    deleteNotebookBtn.addEventListener('click',function(){
        clickSound.play();
    });
</script>
@endsection