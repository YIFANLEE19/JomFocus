@extends('layouts.app')
@section('content')

<div class="container-fluid jomShopBg">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1 class="display-1">JomShop</h1>
            <p>Jom Focus, Earn Points, and Redeem Gifts</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">
            <form class="form-inline my-2 my-lg-0" action="{{route('rewardList.search')}}" method="post">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="keyword" name="keyword" style="height:50px;">
                <button class="admin-btn" type="submit" style="height:50px;">Search</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4 mb-4">
            <h3>Welcome to JomShop, Dear {{ Auth::user()->name }}</h3>
            <h6>Total points: {{ Auth::user()->points }}</h6>
            <a class="admin-btn" href="/jomfocus/my-reward">My Reward</a>
        </div>
    </div>
</div>

<div class="container mt-4 mb-4">
    <div class="row">
        @if(count($rewards))
            @foreach($rewards as $reward)
            <div class="col-md-3 ml-4 mr-4 mt-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/') }}/{{$reward->image}}" class="card-img-top" alt="reward" height="250px" width="250px">
                    <div class="card-body">
                        <br>
                        <h5 class="card-title">{{$reward->name}}</h5>
                        <p class="hidden">{{$reward->id}}</p>
                        <p class="card-text"><b>Quantity:</b><i class="text-secondary"> only {{$reward->quantity}} item left</i></p>
                        <a class="btn btn-primary" href="{{route('redeemReward',['id'=>$reward->id])}}">{{$reward->value}} point</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12 text-center mt-4">
                <p><i>No any gift to redeem. Please wait until JomFocus team update the JomShop. Thank you</i></p>
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
    document.title="JomShop | Jom Focus"
</script>
@endsection