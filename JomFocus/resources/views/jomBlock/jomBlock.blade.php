@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 jomBlock d-flex justify-content-center align-items-center flex-column mt-2">
            <img src="/images/jomBlock.png" alt="">
            <br>
            <a href="Jom-Block-Extension.zip" class="a-action-btn" download>Download</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h1 class="text-center">Jom Block</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-2 mt-2">
            <h3 class="text-center">Why we design Jom Block ?</h3>
            <p>We designed this extension so that users don't get distracted when they're focusing on something. Users can type in the sites they want to ban, such as entertainment sites or social media. With this extension, we want users to stay focused and undistracted at all times.</p>
        </div>
        <div class="col-md-4">
            <h3 class="text-center">How it work ?</h3>
            <p>First, users download the extension. Then unzip the file and add it to the browser. Users type in unproductivity Sites format like (facebook.com). The user clicks save and then starts blocking.</p>
        </div>
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
    document.title="Jom Block | Block Unproductivity Sites | Jom Focus"
</script>
@endsection