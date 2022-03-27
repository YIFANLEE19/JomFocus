@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <a class="admin-btn" href="/news">Back</a>
        </div>
    </div>
</div>

<div class="container">
    @foreach($news as $new)
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{$new->title}}</h1>
                <p>Last update: {{$new->time}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                {!! $new->content !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-8">
                <p><i>by JomFocus Team</i></p>
            </div>
        </div>
        <script>
            document.title="{{$new->title}} | Jom Focus"
        </script>
    @endforeach
</div>


<div class="container-fluid">
    <footer class="py-2 my-2">
        <hr>
        <ul class="nav justify-content-center border-bottom pb-2 mb-2">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="/jom-block" class="nav-link px-2 text-muted">JomBlock</a></li>
            <li class="nav-item"><a href="/jomfocus/jomShop" class="nav-link px-2 text-muted">JomShop</a></li>
            <li class="nav-item"><a href="/news" class="nav-link px-2 text-muted">News</a></li>                
            <li class="nav-item"><a href="/faqs-page" class="nav-link px-2 text-muted">FAQS</a></li>
            <li class="nav-item"><a href="/contact-us" class="nav-link px-2 text-muted">Contact Us</a></li>
            <li class="nav-item"><a href="/user-privacy" class="nav-link px-2 text-muted">User Privacy</a></li>
            <li class="nav-item"><a href="/jom-focus/about-us" class="nav-link px-2 text-muted">About</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2021 SUC-IT20-B</p>
    </footer>
</div>
@endsection