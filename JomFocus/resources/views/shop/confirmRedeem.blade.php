@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
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
</div>

<div class="container-fluid">
    <div class="row confirmRedeem">
        <div class="col-md-12 mt-4 mb-4 text-center">
            <h1 class="display-1">Confirm Reward Redemption</h1>
        </div>
    </div>
</div>

<form action="{{ route('confirmRedeem') }}" method="POST">
    @csrf
    @foreach($rewards as $reward)
    <input type="hidden" class="form-control hidden" id="rewardID" name="rewardID" value="{{$reward->id}}">
    <input type="hidden" class="form-control hidden" id="rewardName" name="rewardName" value="{{$reward->name}}">
    <input type="hidden" class="form-control hidden" id="rewardQuantity" name="rewardQuantity" value="{{$reward->quantity}}">
    <input type="hidden" class="form-control hidden" id="userPoint" name="userPoint" value="{{ Auth::user()->points - $reward->value}}">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <a class="admin-btn" href="/jomfocus/jomShop">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4 mb-4 text-center">
                <h1>Are you sure you want to redeem {{$reward->name}}?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/') }}/{{$reward->image}}" alt="reward" height="350px" width="350px">
            </div>
            <div class="col-md-8">
                <h2>Product Description</h2>
                <p>{!! $reward->description !!}</p>
                <h2>Points: {{$reward->value}}</h2>
                <h2>Quantity: {{$reward->quantity}}</h2>
                <br>
                <p>If you are sure to spend {{$reward->value}} points to redeem <b>{{$reward->name}}</b>, press "Redeem" button.</p>
                <p>Your total point is <b class="text-danger">{{ Auth::user()->points }}</b>.</p>
            </div>
        </div>
        @if($reward->quantity >0)
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-4 ">
                <button type="submit" class="admin-btn" id="redeemBtn">Redeem</button>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-4 ">
                <a class="admin-btn hidden" href="/jomfocus/jomShop">Back</a>
            </div>
        </div>
        @endif
    </div>

    <script>
        var quantityDec =1;
        var quantity = document.getElementById('rewardQuantity').value;
        var redeemBtn = document.getElementById('redeemBtn');
        var backBtn = document.getElementById('backBtn');
        var userPoint = document.getElementById('userPoint').value;
        if(userPoint < 0){
            alert('Please gain more point to redeem this reward. Thank you.');
            redeemBtn.classList.add('hidden');
        }
        if(quantity>0){
            quantity -= quantityDec;
        }
        document.getElementById('rewardQuantity').value=quantity;
    </script>
    @endforeach

</form>

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
    document.title="JomShop | Confirm Redeem | Jom Focus"
</script>
@endsection

