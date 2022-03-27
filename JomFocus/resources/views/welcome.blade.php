@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-2 d-flex justify-content-center align-items-start flex-column banner">
            <h2>Jom Focus ,Stay Focus.</h2>
            <p>An online productivity tools that help you focus.</p>
            <a href="{{ route('register') }}" class="a-sign-in-btn">Sign up</a>
            <p>Already have account? <a href="{{ route('login') }}" class="a-link">Sign in</a></p>
        </div>
        <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
            <img src="/images/HomeIcon.png" alt="" width="450px" height="450px">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4 h-carousel d-flex justify-content-center align-items-center flex-column">
            <div id="homeCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="/images/Carousel-slide-1.png" class="d-block w-100" alt="Countdown-Timer-Carousel">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/images/Carousel-slide-2.png" class="d-block w-100" alt="Pomodoro-Timer-Carousel">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/Carousel-slide-3.png" class="d-block w-100" alt="To-Do-List-Carousel">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/Carousel-slide-4.png" class="d-block w-100" alt="Notebook-Carousel">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/Carousel-slide-5.png" class="d-block w-100" alt="Four-Quadrant-Matrix-Carousel">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 d-flex justify-content-center align-items-center flex-column">
            <h3>Jom Focus include</h3>
            <ul>
                <li>Countdown Timer</li>
                <li>Pomodoro Timer</li>
                <li>To Do List</li>
                <li>Notebook</li>
                <li>Four-Quadrant Matrix</li>
            </ul>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h2>Countdown Timer & Pomodoro Timer</h2>
        </div>
        <div class="col-md-3">
            <h5>Why need a Countdown Timer ?</h5>
            <p>Setting a countdown timer can help you enchance your productivity by helping you to stay focused and committed to critical tasks at hand.</p>
            <p>Setting a timer also helps with blocking out distractions.</p>
        </div>
        <div class="col-md-3 border-right">
            <h5>Sticky Mode in Countdown Timer ?</h5>
            <p>Sticky mode keeps you focused all the time. </p>
            <p>As soon as you hit the start button, you have to focus on what you're doing, and if you're going to open another page, the countdown timer will pause and reset.</p>
        </div>
        <div class="col-md-3 pl-4">
            <h5>Why need a Pomodoro Timer ?</h5>
            <p>The purpose of pomodoro timer is to help you focus on any tasks you are working on, like study, writing or coding.</p>
            <p>This pomodoro timer is inspired by Pomodoro Technique which is a time management method developed by Francesco Cirillo.</p>
        </div>
        <div class="col-md-3">
            <h5>What is Pomodoro Technique ?</h5>
            <p>The Pomodoro Technique is created by Francesco Cirillo for a more productive way to work and study. The technique uses a timer to break down work into intervals, traditionally 25 minutes in length, separated by short breaks. Each interval is known as a pomodoro, from the Italian word for 'tomato', after the tomato-shaped kitchen timer that Cirillo used as a university student. - <strong>Wikipedia</strong></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <img src="/images/todo-book-h.png" alt="">
        </div>
        <div class="col-md-4 offset-md-2 d-flex align-items-start justify-content-center flex-column">
            <h2>To Do List</h2>
            <h5>Create your task list before start anything!</h5>
            <p>Organizing your tasks with a list can make everything much more manageable and make you feel grounded.</p>
            <p>Seeing a clear outline of your completed and uncompleted tasks will help you feel organized and stay mentally focused.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 d-flex align-items-start justify-content-center flex-column mt-4">
            <h2>Notebook</h2>
            <h5>Start keep your note in a notebook!</h5>
            <p>Notetaking keeps your body active and involved and helps you avoid feelings of drowsiness or distraction.</p>
            <p>Notes help you to maintain a permanent record of what you have read or listened to.</p>
        </div>
        <div class="col-md-4 offset-md-2 mt-4">
            <img src="/images/notebook-h.png" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <img src="/images/four-quadrant-matrix-h.png" alt="">
        </div>
        <div class="col-md-4 offset-md-4 d-flex align-items-start justify-content-center flex-column">
            <h2>Four-quadrant Matrix</h2>
            <h5>Assign tasks to different priorities</h5>
            <p>Covey's 4 quadrants method of time management lets you prioritize what is important and focus on that.</p>
            <p>By prioritizing your tasks across four quadrants, you can differentiate between tasks that make a real difference in the end. </p>
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

@endsection