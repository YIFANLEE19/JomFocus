@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center mt-4">
            <h2>Admin Dashboard</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-2">
            <img src="/images/admin-page.png" alt="" height="500px" width="500px">
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="total-user">
                <h4>Total User</h4>
                <h1 class="text-center">{{ $totalUser }}</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <h2>Manage Account</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-2 text-center">
            <img src="/images/admin-user-pic.png" alt="">
            <a class="admin-btn" href="{{ route('admin.userList') }}">User</a>
        </div>
        <div class="col-md-4 text-center">
            <img src="/images/admin-pic.png" alt="">
            <a class="admin-btn" href="{{ route('admin.adminList') }}">Admin</a>
        </div>
    </div>
</div>
<br><br>

@endsection