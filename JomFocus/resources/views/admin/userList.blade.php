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
            <h2>User List</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline my-2 my-lg-0" action="{{route('userList.search')}}" method="post">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search name" aria-label="Search" id="keyword" name="keyword" style="height:50px;">
                <button class="admin-btn" type="submit" style="height:50px;">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Create at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($users))
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                            <a class="admin-btn" href="{{route('admin.deleteUser',['id'=>$user->id])}}"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th scope="row">--</th>
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
    document.title="Admin | User List | Jom Focus"
</script>
@endsection
