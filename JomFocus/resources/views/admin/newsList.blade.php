@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Dear {{ Auth::user()->name }},</strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h2>News List</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline my-2 my-lg-0" action="{{route('news.search')}}" method="post">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search title" aria-label="Search" id="keyword" name="keyword" style="height:50px;">
                <button class="admin-btn" type="submit" style="height:50px;">Search </button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="hidden">Id</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($news))
                        @foreach($news as $news)
                        <tr>
                            <td class="hidden">{{$news->id}}</td>
                            <th scope="row">{{$news->time}}</th>
                            <td>{{$news->title}}</td>
                            <td>
                                <a class="admin-btn" href="{{route('admin.editNews',['id'=>$news->id])}}">Edit</a>
                                <a class="admin-btn" href="{{route('admin.deleteNews',['id'=>$news->id])}}"> Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th scope="row">--</th>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.title="Admin | News List | Jom Focus"
</script>
@endsection

