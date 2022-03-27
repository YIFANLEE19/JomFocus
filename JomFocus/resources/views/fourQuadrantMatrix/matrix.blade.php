@extends('layouts.app')
@section('content')

<section id="matrix">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center flex-column">
                <img src="/images/Four-Quadrant-Matrix.png" alt="Four-Quadrant-Matrix" width="350px" height="350px">
                <h2>Four-Quadrant Matrix</h2>
                <br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="m-header d-flex justify-content-between align-items-center">
                    <h3>Important | Urgent</h3>
                    <button class="m-add-button" data-bs-toggle="modal" data-bs-target="#iUrgent">+</button>
                </div>
                @if(count($i_urgents))
                    @foreach($i_urgents as $i_urgent)
                        <div class="m-content">
                            <p class="hidden">{{$i_urgent->id}}</p>
                            <p>{{$i_urgent->title}}</p>
                            <p>{{$i_urgent->time}}</p>
                            <a class="m-delete-button" href="{{route('deleteIUrgent',['id'=>$i_urgent->id])}}" id="iUDeleteBtn"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    @endforeach
                @else
                    <br>
                    <p>No any important and urgent task</p>
                    <br><br><br><br>
                @endif
            </div>

            <div class="col-md-4">
                <div class="m-header d-flex justify-content-between align-items-center">
                    <h3>Important | Not Urgent</h3>
                    <button class="m-add-button" data-bs-toggle="modal" data-bs-target="#iNUrgent">+</button>
                </div>
                @if(count($i_n_urgents))
                    @foreach($i_n_urgents as $i_n_urgent)
                        <div class="m-content">
                            <p class="hidden">{{$i_n_urgent->id}}</p>
                            <p>{{$i_n_urgent->title}}</p>
                            <p>{{$i_n_urgent->time}}</p>
                            <a class="m-delete-button" href="{{route('deleteINUrgent',['id'=>$i_n_urgent->id])}}" id="iNUDeleteBtn"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    @endforeach
                @else
                    <br>
                    <p>No any important and not urgent task</p>
                    <br><br><br><br>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="m-header d-flex justify-content-between align-items-center">
                    <h3>Not Important | Urgent</h3>
                    <button class="m-add-button"  data-bs-toggle="modal" data-bs-target="#nIUrgent">+</button>
                </div>
                @if(count($n_i_urgents))
                    @foreach($n_i_urgents as $n_i_urgent)
                        <div class="m-content">
                            <p class="hidden">{{$n_i_urgent->id}}</p>
                            <p>{{$n_i_urgent->title}}</p>
                            <p>{{$n_i_urgent->time}}</p>
                            <a class="m-delete-button" href="{{route('deleteNIUrgent',['id'=>$n_i_urgent->id])}}" id="nIUDeleteBtn"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    @endforeach
                @else
                    <br>
                    <p>No any not important and urgent task</p>
                    <br><br><br><br>
                @endif
            </div>
            <div class="col-md-4">
                <div class="m-header d-flex justify-content-between align-items-center">
                    <h3>Not Important | Not Urgent</h3>
                    <button class="m-add-button"  data-bs-toggle="modal" data-bs-target="#nINUrgent">+</button>
                </div>
                @if(count($n_i_n_urgents))
                    @foreach($n_i_n_urgents as $n_i_n_urgent)
                        <div class="m-content">
                            <p class="hidden">{{$n_i_n_urgent->id}}</p>
                            <p>{{$n_i_n_urgent->title}}</p>
                            <p>{{$n_i_n_urgent->time}}</p>
                            <a class="m-delete-button" href="{{route('deleteNINUrgent',['id'=>$n_i_n_urgent->id])}}" id="nINUDeleteBtn"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    @endforeach
                @else
                    <br>
                    <p>No any not important and not urgent task</p>
                    <br><br><br><br>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Modal important urgent -->
<div class="modal fade" id="iUrgent" tabindex="-1" aria-labelledby="iUrgentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iUrgentLabel">Important & Urgent Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('storeIUrgent') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="importantUrgent" name="importantUrgent" placeholder="Enter important and urgent task">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal important not urgent -->
<div class="modal fade" id="iNUrgent" tabindex="-1" aria-labelledby="iNUrgentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iNUrgentLabel">Important & Not Urgent Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('storeINUrgent') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="importantNotUrgent" name="importantNotUrgent" placeholder="Enter important and not urgent task">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal not important urgent -->
<div class="modal fade" id="nIUrgent" tabindex="-1" aria-labelledby="nIUrgentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nIUrgentLabel">Not Important & Urgent Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('storeNIUrgent') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="notImportantUrgent" name="notImportantUrgent" placeholder="Enter not important and urgent task">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal not important not urgent -->
<div class="modal fade" id="nINUrgent" tabindex="-1" aria-labelledby="nINUrgentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nINUrgentLabel">Not Important & Not Urgent Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('storeNINUrgent') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="notImportantNotUrgent" name="notImportantNotUrgent" placeholder="Enter not important and not urgent task">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.title="Four Quadrant Matrix | Jom Focus"
</script>
@endsection