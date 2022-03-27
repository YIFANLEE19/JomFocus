@extends('layouts.app')
@section('content')

<div class="container-fluid d-flex justify-content-center align-items-center news" style="height:30vh;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-3"><strong>News</strong></h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1>Recently</h1>
        </div>
    </div>
    <div class="row">
    @if(count($news))
        @foreach($news as $new)
        <div class="col-md-8 offset-md-2 mb-4">
            <a href="{{route('newsDetail',['id'=>$new->id])}}" class="news-item">
                <div class="d-flex justify-content-between">
                    <div class="hidden">{{$new->id}}</div>
                    <div>{{$new->title}}</div>
                    <div>{{$new->time}}</div>
                </div>
            </a>
        </div>
        @endforeach
    @else
        <div class="col-md-12 text-center">
            <p>Currently no any hot news.</p>
        </div>
    @endif
    </div>
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

<script>
    document.title="News | Jom Focus"
</script>
@endsection