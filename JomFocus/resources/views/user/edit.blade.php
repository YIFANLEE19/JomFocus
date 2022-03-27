@extends('layouts.app')
@section('content')

<!-- Edit User Name -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
            <h1>Edit Profile Name</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-4">
            <form method="POST" action="{{ route('usernameUpdate')}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" class="form-control"  id="username "name="username" value="{{$user->name}}" autofocus>
                </div>
                <button type="submit" class="u-action-btn">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection