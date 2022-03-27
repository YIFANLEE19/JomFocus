@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
<div id="liveAlertPlaceholder"></div>
<section id="countdownTimer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center flex-column">
                <img id="cStatusImage" src="/images/StartCountdown.png" alt="" height="350px" width="350px">
                <p id="cStatusString">Set your focus duration now !</p>
            </div>
            <div class="col-md-8">
                <div class="countdown-main d-flex flex-column justify-content-center align-items-center">
                    <div class="time-display-group d-flex justify-content-center">
                        <div class="time-display-cover d-flex justify-content-center align-items-center flex-column">
                            <h2 class="time-string" id="c_hours">0</h2>
                            <p>hours</p>
                        </div>
                        <div class="time-display-cover d-flex justify-content-center align-items-center flex-column">
                            <h2 class="time-string" id="c_minutes">0</h2>
                            <p>minutes</p>
                        </div>
                        <div class="time-display-cover d-flex justify-content-center align-items-center flex-column">
                            <h2 class="time-string" id="c_seconds">0</h2>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="countdown-btn-group mt-4">
                        <button  class="c-action-btn" id="cEditBtn" data-toggle="modal" data-target="#countdownSetting">
                            Settings
                        </button>
                        <button  class="c-action-btn" id="cStartBtn">
                            Start
                        </button>
                        <button  class="c-action-btn hidden" id="cCancelBtn">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Your Goal</h3>
                <h1 class="display-1" id="display_goal">Set your goal now!</h1>
            </div>
        </div>
    </div>

    <div class="modal fade" id="countdownSetting" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="countdownSettingLabel">Set your focus duration and goal</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Set Time-->
                    <form class="d-flex flex-column">  
                        <div class="form-group">
                            <label for="c_goal">Set Your Goal</label><br>
                            <input type="text" id="c_goal">

                        </div>     
                        <div class="form-group">
                            <label for="editHours">Set Hours</label><br>
                            <input type="number" id="editHours" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="editMinutes">Set Minutes</label><br>
                            <input type="number" id="editMinutes" value="20" max="60">
                        </div>
                    </form>
                    <!-- Point collect -->
                    <p>*Dear user, if you successfully complete your goal in the Countdown Timer <strong>(focus duration at least 20 minutes)</strong>, you will receive <strong>100 points</strong>. Collect more points to redeem prizes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" id="cSaveBtn">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="promptAfterCountdown" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Time's up!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Dear {{ Auth::user()->name }} , did you accomplish the goal you set for yourself on time ?</p>
                    <p>Take a break and click "yes" if complete your previous goal</p>
                    <p>Please be honest about achieving your goal.</p>
                    <p><i><strong>Your honesty is very important.</strong></i></p>
                    <p>*Dear user, to gain points you need to set focus duration more than or equal 20 minutes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="noFinishBtn">No</button>
                    <button type="submit" class="btn btn-primary" id="finishBtn" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="promptAfterCountdownWithPoint" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Time's up!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Dear {{ Auth::user()->name }} , did you accomplish the goal you set for yourself on time ?</p>
                    <p>Take a break and click "yes" if complete your previous goal</p>
                    <p>Please be honest about achieving your goal.</p>
                    <p><i><strong>Your honesty is very important.</strong></i></p>
                    <p>*Dear user, if you successfully complete your goal in the Countdown Timer, you will receive <strong>100 points</strong>. Collect more points to redeem prizes.</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('cClaimPoint')}}" method="post">
                        @csrf
                        <input type="hidden" class="form-control"  id="userPoint "name="userPoint" value="{{ Auth::user()->points + 100}}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="noFinishBtn">No</button>
                        <button type="submit" class="btn btn-primary" id="finishBtn">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/countdown.js"></script>
<script>
    document.title="Countdown Timer | Jom Focus"
</script>
@endsection