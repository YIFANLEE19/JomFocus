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
        <div class="col-md-12 text-center mt-4">
            <h1>User Feedback</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="post">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search message/email" aria-label="Search" id="keyword" name="keyword" style="height:50px;">
                <button class="admin-btn" type="submit" style="height:50px;">Search </button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Feedback/Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($feedbacks))
                        @foreach($feedbacks as $feedback)
                        <tr>
                            <th scope="row" class="hidden">{{$feedback->id}}</th>
                            <td>{{$feedback->time}}</td>
                            <td>{{$feedback->firstName}} {{$feedback->lastName}}</td>
                            <td><a href="mailto:{{$feedback->email}}">{{$feedback->email}}</a></td>
                            <td>{{$feedback->message}}</td>
                            <td>
                                <a class="admin-btn" href="{{route('admin.deleteFeedback',['id'=>$feedback->id])}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th scope="row" class="hidden">--</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
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
    document.title="Admin | User Feedback | Jom Focus"
</script>
@endsection