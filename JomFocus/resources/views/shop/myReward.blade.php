@extends('layouts.app')
@section('content')

<div class="container-fluid jomShopBg">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1 class="display-1">My Reward</h1>
        </div>
    </div>
</div>

<div class="container mt-4 mb-4">
    <div class="col-md-12 mt-4 mb-4">
        <a class="admin-btn" href="/jomfocus/jomShop">Back</a>
    </div>
    <div class="row">
        @if(count($redeem_lists))
            @foreach($redeem_lists as $redeem_list)
            <div class="col-md-3 ml-4 mr-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/') }}/{{$redeem_list->rImage}}" class="card-img-top rounded-start" alt="reward" height="350px" width="250px" >
                    <div class="card-body">
                        <h5 class="card-title">{{$redeem_list->rewardName}}</h5>
                        <p class="card-body">Redeen at: {{$redeem_list->time}}</p>
                        <p class="hidden" id="rewardCode" name="rewardCode">{{$redeem_list->rCode}}</p>
                        <button type="button" class="admin-btn" onclick="copyToClipboard('#rewardCode')">{{$redeem_list->rCode}}</button>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12 text-center mt-4">
                <p><i>Please go to JomShop to redeem your reward.</i></p>
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
    document.title="My Reward | Jom Focus"
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>
@endsection