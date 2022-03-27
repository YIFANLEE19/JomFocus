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
    <section id="pomodoroTimer" class="d-flex justify-content-center align-items-center" >
        <div class="container" id="pomodoro">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="pomodoro-main">
                        <div class="button-group mode-buttons" id="mode-buttons">
                            <button data-mode="shortBreakTime" class="button mode-button" id="js-short-break">Short Break</button>
                            <button data-mode="workTime" class="button mode-button active" id="js-pomodoro">Work</button>
                            <button data-mode="longBreakTime" class="button mode-button" id="js-long-break">Long Break</button>
                        </div>
                        <div class="display-time">
                            <span id="p-minutes">25</span>
                            <span class="separator">:</span>
                            <span id="p-seconds">00</span>
                        </div>
                        <button class="action-btn mb-4 mt-4" id="action-btn" data-action="start">
                            Start
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 id="dispGoal">Set your goal now!</h1>
                <button type="button" id="confirmBtn" class="g-btn hidden" data-bs-toggle="modal" data-bs-target="#confirmModal">Finish</button>
                <button type="button" id="confirmWithPointsBtn" class="g-btn hidden" data-bs-toggle="modal" data-bs-target="#confirmModalWithPoints">Finish</button>
                <button type="button" id="goalBtn" class="g-btn" data-bs-toggle="modal" data-bs-target="#goalModal">Goal</button>
            </div>
        </div>
    </div>

    <!-- Confirm Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Are sure you accomplish your goal?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Dear {{ Auth::user()->name }},</p>
                    <p>To be fair, the JomFocus Honor Code requires that you:</p>
                    <ul>
                        <li>Please be honest about achieving your goal.</li>
                    </ul>
                    <p><i>If your answer is meet the goal, then press "Yes" button. Press "No" button if you have not completed your goal.</i></p>
                    <p><i><strong>Your honesty is very important.</strong></i></p>
                    <p>*Dear user,you <strong>Only</strong> will receive <strong>500 points</strong> if your focus duration is equal 2 hour(1 cycle/4 pomodoro). Collect more points to redeem prizes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="confirmResetBtn">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Confirm Modal with point -->
    <div class="modal fade" id="confirmModalWithPoints" tabindex="-1" aria-labelledby="confirmModalWithPointsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalWithPointsLabel">Are sure you accomplish your goal?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Dear {{ Auth::user()->name }},</p>
                    <p>To be fair, the JomFocus Honor Code requires that you:</p>
                    <ul>
                        <li>Please be honest about achieving your goal.</li>
                    </ul>
                    <p><i>If your answer is meet the goal, then press "Yes" button. Press "No" button if you have not completed your goal.</i></p>
                    <p><i><strong>Your honesty is very important.</strong></i></p>
                    <p>*Dear user, if you successfully complete your goal in the Pomodoro Timer, you will receive 500 points. Collect more points to redeem prizes.</p>
                </div>
                <form action="{{ route('pClaimPoint')}}" method="post">
                    @csrf
                    <input type="hidden" class="form-control"  id="userPoint "name="userPoint" value="{{ Auth::user()->points + 500}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Set Goal Modal -->
    <div class="modal fade" id="goalModal" tabindex="-1" aria-labelledby="goalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Set your goals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Dear {{ Auth::user()->name }},</p>
                    <p>Setting a goal is a very important part of the Pomodoro Timer. Use Pomodoro Technique to help you achieve a goal while having a good short rest. So, you just type in the goal you want to accomplish and start using the Pomodoro Timer.</p>
                    <p>*Dear user,you <strong>Only</strong> will receive <strong>500 points</strong> when your focus duration greater or equal 2 hours(1 cycle/4 pomodoro). Collect more points to redeem prizes.</p>
                    <!-- Set goal -->
                    <form class="d-flex flex-column">  
                        <div class="form-group">
                            <label for="p_goal">Set Your Goal:</label><br>
                            <input type="text" id="p_goal">
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="saveGoalBtn" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    


<script src="/js/pomodoro.js"></script>
<script>
    document.title="Pomodoro Timer | Jom Focus"
</script>
@endsection