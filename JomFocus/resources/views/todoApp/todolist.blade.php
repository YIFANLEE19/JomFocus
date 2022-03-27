@extends('layouts.app')
@section('content')

<section id="todoApp">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-2 d-flex flex-column">
                <img src="/images/ToDo.png" alt="" height="350px" width="350px">
                <form action="{{ route('storeTodo') }}" method="post">
                    @csrf
                    <div class="form-group todolist-input-form mt-2">
                        <input type="text" maxlength="70" placeholder="Enter Your Task" id="todoTitle" name="todoTitle">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control todo-content" placeholder="Content" id="todoContent" name="todoContent" style="height: 150px;width: 350px;"></textarea>
                        <label class="todoContentLabel" for="todoContent">Content</label>
                    </div>
                    <button class="todolist-add-task" id="todoBtn" type="submit">Add Task</button>
                </form>
            </div>
            <div class="col-md-8 mt-2">
                <h1>{{ Auth::user()->name }}'s To Do </h1>
                <hr>
                @if(count($todolists))
                <ul class="todo-list" id="todo-list">
                @foreach($todolists as $todolist)
                    <div class="todolist-todo">
                        <li class="mb-2 pb-4">
                            <div class="todo pb-2">
                                <h2 class="hidden">{{$todolist->id}}</h2>
                                <h3>{{$todolist->title}}</h3>
                                <p>{{$todolist->content}}</p>
                                <p>{{$todolist->time}}</p>
                            </div>
                            <a class="todo-delete-btn todoapp-btn" id="todoDelete" href="{{route('deleteTodo',['id'=>$todolist->id])}}"><i class="fa fa-trash"></i> Delete</a>
                        </li>
                    </div>
                @endforeach
                </ul>
                @else
                <p>No task. Please add your task !</p>
                @endif
            </div>
        </div>
    </div>
</section>


<script>
    document.title="To Do App | Jom Focus"
    const clickSound = new Audio('/sound/clicksoundeffect.mp3');
    const todoBtn = document.getElementById('todoBtn');
    const todoDelete = document.getElementById('todoDelete');
    todoBtn.addEventListener('click',function(){
        clickSound.play();
    });
    todoDelete.addEventListener('click',function(){
        clickSound.play();
    });
</script>
@endsection
