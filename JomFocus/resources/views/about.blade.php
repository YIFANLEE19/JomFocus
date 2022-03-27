@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="height:30vh;">
        <div class="col-md-4 mt-2 d-flex align-items-center justify-content-center flex-column">
            <img src="/images/JomFocus.png" alt="JomFocus Logo">
            <p>Jom Focus, Stay Focus.</p>
        </div>
        <div class="col-md-6 offset-md-1 d-flex align-items-center justify-content-center flex-column">
            <p><strong>JomFocus</strong> is a productivity app.The main purpose of develop this system is provide a platform for people who want to stay focus while doing something like study, coding or any task. The system provides users with two timer mode which is pomodoro timer based on pomodoro technique and countdown timer, to do list, notebook and other templates for recording tasks.  </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center align-items-center flex-column mt-4">
            <img src="/images/leader.png" alt="team-leader">
            <br>
            <h4>LEE YI FAN</h4>
            <p>(Team Leader)</p>
            <div class="col-md-4 text-center">
                <p>I think the combination of JomFocus and JomBlock is a very effective way to stay focused. I hope we can build a useful and usable productivity application through different models.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 offset-md-2 mt-4 mb-4">
            <img src="/images/team-member-1.png" alt="team-member-1">
            <br>
            <h4>TAN QING JI</h4>
            <p>(Member)</p>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <p>I think the productivity system is very helpful and functionable system which can help to solve and complete the task in the effective and efficiently method. With the system, the task can be completed good and well.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-2 d-flex justify-content-center align-items-center mt-4 mb-4">
            <p>I think procrastination is currently one of the most common problems among young people.  The productivity system effectively prevents and solves the problem of procrastination, thereby improving their habits and increasing their work efficiency.</p>
        </div>
        <div class="col-md-4 offset-md-2">
            <img src="/images/team-member-2.png" alt="team-member-2">
            <br>
            <h4>TAY KI CHANG</h4>
            <p>(Member)</p>
        </div>
    </div>
</div>
<br><br><br><br>
<div class="container-fluid mt-4" id="aboutSection">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-4 mb-4">
            <h2 class="text-center">Who we are?</h2>
            <p>We are IT students from Southern University College. JomFocus is the product of our final project, which is the project we need to do before we graduate. Under the teacher's education and supervision, after two semesters, it was finally completed. Of course, there are still many areas that have not been improved. These are the places we should learn and explore. However, the development and design of software products this time has brought us many valuable experiences and lessons. It allows us to practice the theoretical knowledge we have learned into action. For us to leave indelible deeds on the road of IT life in the future. We welcome anyone to participate and use our products, and provide us with feedback. We accept any suggestions and criticisms. We are sincerely grateful.</p>
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
    document.title="About | Jom Focus"
</script>
@endsection