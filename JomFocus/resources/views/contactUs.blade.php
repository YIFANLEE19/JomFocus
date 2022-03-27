@extends('layouts.app')
@section('content')
<div class="container-fluid contactUsBanner">
    <br><br>
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1 class="display-1">Contact Us</h1>
            <p>Our team is ready to hear from you. </p>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-2">
            <h3>Reach out to us!</h3>
            <p>Got a question about JomFocus? Are you interested in partnering with us? Have some suggestion or just want to say hi? Contact us:</p>
            <form action="{{ route('storeFeedback') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control mt-2 mb-2" placeholder="First Name" id="feedbackFirstName" name="feedbackFirstName">
                    <input type="text" class="form-control mt-2 mb-2" placeholder="Last Name" id="feedbackLastName" name="feedbackLastName">
                    <input type="email" class="form-control mt-2 mb-2" placeholder="Email" id="feedbackEmail" name="feedbackEmail">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="feedbackMessage" style="height: 150px" cols="30" id="feedbackMessage" name="feedbackMessage"></textarea>
                        <label for="feedbackMessage">Message</label>
                    </div>
                    <button type="submit" class="cSubmit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Customer Care</h3>
            <p>Not sure where to start? How to use? Need help just visit our FAQS page(<a href="/faqs-page">here</a>) or get in touch with us:</p>
            <br>
            <div class="container d-flex flex-row align-items-center">
                <img src="/images/team-member-1.png" alt="team-member-1" width="100px" height="100px">
                <div class="container d-flex flex-column">
                    <h5>TAN QING JI</h5>
                    <p>Email: <a href="mailto: D200171B@sc.edu.my">D200171B@sc.edu.my</a></p>
                </div>
            </div>
            <br>
            <div class="container d-flex flex-row align-items-center">
                <img src="/images/team-member-2.png" alt="team-member-2" width="100px" height="100px">
                <div class="container d-flex flex-column">
                    <h5>TAY KI CHANG</h5>
                    <p>Email: <a href="mailto: D200132B@sc.edu.my">D200132B@sc.edu.my</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4 class="display-5 text-center mb-4">JomFocus cares about the voice of every user</h4>
            <p>If you encounter difficult problems in using JomFocus and any comments and suggestions beneficial to the development of the platform, you are welcome to write directly to our team leader's mailbox : <strong><a href="mailto:D200148B@sc.edu.my">D200148B@sc.edu.my</a></strong>.</p>
            <br>
            <h5>For efficient processing of your message, please include the following information:</h5>
            <ul>
                <li>Your personal or work unit information (company/brand/department/position/name, etc.)</li>
                <li>Your contact information (email address/direct telephone number, etc.)</li>
                <li>Specific descriptions of relevant issues, comments or suggestions (background/cases/supporting materials, etc.)</li>
            </ul>
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
    document.title="Contact us | Jom Focus"
</script>
@endsection