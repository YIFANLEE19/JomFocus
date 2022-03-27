@extends('layouts.app')
@section('content')
<div class="container-fluid faqsBanner mb-4">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1 class="display-1">Frequently asked questions</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h1>JomFocus</h1>
            <div class="accordion" id="accordionJomFocusPanelsStayOpen">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomFocusPanelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#JomFocusPanelsStayOpen" aria-expanded="true" aria-controls="JomFocusPanelsStayOpen">
                            What is JomFocus?
                        </button>
                    </h2>
                    <div id="JomFocusPanelsStayOpen" class="accordion-collapse collapse show" aria-labelledby="JomFocusPanelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p><strong>JomFocus</strong> is an online productivity tools that help user to focus. JomFocus provides users with two timer mode which is <strong><i><a href="{{ route('viewCountdownTimer') }}">Countdown Timer </a></i></strong> and <strong><i><a href="{{ route('viewPomodoroTimer') }}">Pomodoro Timer </a></i></strong> based on pomodoro technique and other tools to record the tasks or notes(like <strong><i><a href="/notebook">Notebook</a></i></strong>, <strong><i><a href="/to-do-app">To Do List</a></i></strong> and <strong><i><a href="/four-quadrant-matrix">Four-quadrant Matrix</a></i></strong>  ).</p>
                            <img src="{{asset('/images/JomFocus.png')}}" alt="Logo">
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomFocusPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomFocusPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="JomFocusPanelsStayOpen-collapseTwo">
                            Why needs JomFocus?
                        </button>
                    </h2>
                    <div id="JomFocusPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="JomFocusPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>The main purpose of develop <strong>JomFocus</strong> is provide a platform for people who want to stay focus while doing something like study, coding or any task. The end user can be students, office workers and so on. We also hope that JomFocus can help users keep focus while accomplish a task and promote self-discipline.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomFocusPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomFocusPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="JomFocusPanelsStayOpen-collapseThree">
                            How to use?
                        </button>
                    </h2>
                    <div id="JomFocusPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="JomFocusPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p><strong>JomFocus</strong> is very easy to use, users can choose one timer mode to use from two timer modes(<strong><i><a href="{{ route('viewCountdownTimer') }}">Countdown Timer </a></i></strong> or <strong><i><a href="{{ route('viewPomodoroTimer') }}">Pomodoro Timer </a></i></strong> ) when completing a task. Users can also make full use of the system with our recommended extensions( <strong><i><a href="/jom-block">JomBlock </a></i></strong> ) to achieve the best way to stay focused.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomFocusPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomFocusPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="JomFocusPanelsStayOpen-collapseFour">
                            Who is JomFocus's target user？
                        </button>
                    </h2>
                    <div id="JomFocusPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="JomFocusPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>We built JomFocus to enable users who can't stay focused to improve their focus in the process of getting things done.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomFocusPanelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomFocusPanelsStayOpen-collapseFive" aria-expanded="false" aria-controls="JomFocusPanelsStayOpen-collapseFive">
                            Benefit Of JomFocus
                        </button>
                    </h2>
                    <div id="JomFocusPanelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="JomFocusPanelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <p>JomFocus provides users with multiple options to stay focused and keep track of events. JomFocus specifically designed an extension (<strong><i><a href="/jom-block">JomBlock</a></i></strong>) to help users not be affected by external distractions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<!-- JomFocus Features -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h2>Countdown Timer</h2>
            <div class="accordion" id="accordionCountdownTimerPanelsStayOpen">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="CountdownTimerPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CountdownTimerPanelsStayOpen-collapseOne" aria-expanded="false" aria-controls="CountdownTimerPanelsStayOpen-collapseOne">
                            What is Countdown Timer?
                        </button>
                    </h2>
                    <div id="CountdownTimerPanelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="CountdownTimerPanelsStayOpen-collapseOne">
                        <div class="accordion-body">
                            <p>The <strong>Countdown Timer</strong> allows users to determine how long they want to focus. Users only need to set the time in the Settings to start the countdown. In order to enhance the <strong>Countdown Timer</strong>, we designed a feature called <strong><i>Sticky Mode</i></strong> for users. The user cannot leave the current page when the start button is pressed. If the user insists on leaving, the countdown will be cancelled and reset. In this mode, we provide notifications and task lists.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="CountdownTimerPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CountdownTimerPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="CountdownTimerPanelsStayOpen-collapseTwo">
                            Why needs Countdown Timer?
                        </button>
                    </h2>
                    <div id="CountdownTimerPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="CountdownTimerPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>Setting a <strong>Countdown Timer</strong> can help you enhance your productivity by helping you to stay focused and committed to critical tasks at hand. Setting a timer also helps with blocking out distractions.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="CountdownTimerPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CountdownTimerPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="CountdownTimerPanelsStayOpen-collapseThree">
                            How to use?
                        </button>
                    </h2>
                    <div id="CountdownTimerPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="CountdownTimerPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>First users need to sign in (<a href="{{ route('login') }}">here</a>) the system, if not please sign up (<a href="{{ route('register') }}">here</a>). After that, the user needs to click the Settings button to set the duration. After the user saves the time, he can press the start button. But we want the user to fill out the <strong><i>task list</i></strong> before pressing the Start button.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="CountdownTimerPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CountdownTimerPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="CountdownTimerPanelsStayOpen-collapseFour">
                            Benefit of Countdown Timer
                        </button>
                    </h2>
                    <div id="CountdownTimerPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="CountdownTimerPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>Countdown Timer is designed for people who want to get things done in a specific time or in a short time. The reason behind we design the Countdown Timer is that some users want to be unable to stay focused for a certain period of time or for a short period of time, so our product provides this service. Users can customize the focus period and work with JomBlock to achieve effective focus. In addition, with this Countdown Timer, we also provide an area for the user to fill in a goal, that is, something to be done within a specific time. The idea is that the user will remember the goal and achieve it by a certain amount of time.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="CountdownTimerPanelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#CountdownTimerPanelsStayOpen-collapseFive" aria-expanded="false" aria-controls="CountdownTimerPanelsStayOpen-collapseFive">
                            How to earn points in Countdown timer?
                        </button>
                    </h2>
                    <div id="CountdownTimerPanelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="CountdownTimerPanelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <p>If you successfully complete your goal in the Countdown Timer <strong>(focus duration at least 20 minutes)</strong>, you will receive <strong>100 points</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Pomodoro Timer</h2>
            <div class="accordion" id="accordionPomodoroTimerPanelsStayOpen">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="PomodoroTimerPanelsStayOpen-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PomodoroTimerPanelsStayOpen-collapseOne" aria-expanded="true" aria-controls="PomodoroTimerPanelsStayOpen-collapseOne">
                            What is Pomodoro Timer?
                        </button>
                    </h2>
                    <div id="PomodoroTimerPanelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="PomodoroTimerPanelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p>This <strong>Pomodoro Timer</strong> is inspired by Pomodoro Technique which is a time management method developed by Francesco Cirillo for a more productive way to work and study. The technique uses a timer to break down work into intervals, traditionally 25 minutes in length, separated by short breaks. Each interval is known as a pomodoro, after 4 pomodoro user will have a 15 minutes time to take a long break.In this mode, we provide notifications and task lists.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="PomodoroTimerPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PomodoroTimerPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="PomodoroTimerPanelsStayOpen-collapseTwo">
                            Why needs Pomodoro Timer?
                        </button>
                    </h2>
                    <div id="PomodoroTimerPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="PomodoroTimerPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>The purpose we create <strong>Pomodoro Timer</strong> is to help user focus on any tasks you are working on, like study, writing or coding through the <i>Pomodoro Technique</i>.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="PomodoroTimerPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PomodoroTimerPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="PomodoroTimerPanelsStayOpen-collapseThree">
                            How to use?
                        </button>
                    </h2>
                    <div id="PomodoroTimerPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="PomodoroTimerPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>First users need to sign in (<a href="{{ route('login') }}">here</a>) the system, if not please sign up (<a href="{{ route('register') }}">here</a>). Users only need to press the start button to start using it. But before pressing the Start button, we recommend that users fill out the <strong><i>task list</i></strong> first. When timer switch to break time, an alarm will sound and a notification will be given.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="PomodoroTimerPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PomodoroTimerPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="PomodoroTimerPanelsStayOpen-collapseFour">
                            Promodoro Technique in 5 step?
                        </button>
                    </h2>
                    <div id="PomodoroTimerPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="PomodoroTimerPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>Step 1. Set the goal</p>
                            <p>Step 2. Set a timer for 25 minutes</p>
                            <p>Step 3. Work on the goal until timer beeps</p>
                            <p>Step 4. Take a short break of 5 minutes</p>
                            <p>Step 5. Repeat the cycle 4 times and take a long break after 4 sessions</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="PomodoroTimerPanelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PomodoroTimerPanelsStayOpen-collapseFive" aria-expanded="false" aria-controls="PomodoroTimerPanelsStayOpen-collapseFive">
                            Benefit of Pomodoro Timer
                        </button>
                    </h2>
                    <div id="PomodoroTimerPanelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="PomodoroTimerPanelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <p>Our Pomodoro Timer was designed to create a simple way to balance attention and deliberate rest. Therefore, through Pomodoro Technique, we hope that users will not feel too much pressure and lack of rest time. To use the Pomodoro Timer, users need only take two steps, first filling in a goal and then pressing the Start button to start focusing.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="PomodoroTimerPanelsStayOpen-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PomodoroTimerPanelsStayOpen-collapseSix" aria-expanded="false" aria-controls="PomodoroTimerPanelsStayOpen-collapseSix">
                            How to earn points in Pomodoro Timer
                        </button>
                    </h2>
                    <div id="PomodoroTimerPanelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="PomodoroTimerPanelsStayOpen-headingSix">
                        <div class="accordion-body">
                            <p>You <strong>Only</strong> will receive <strong>500 points</strong> if your focus duration is equal 2 hour(1 pomodoro). Collect more points to redeem prizes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <h2>Notebook</h2>
            <div class="accordion" id="accordionNotebookPanelsStayOpen">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="NotebookPanelsStayOpen-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#NotebookPanelsStayOpen-collapseOne" aria-expanded="false" aria-controls="NotebookPanelsStayOpen-collapseOne">
                            What is Notebook?
                        </button>
                    </h2>
                    <div id="NotebookPanelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="NotebookPanelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p>Notebook is a tool that helps users take notes. We want users to think of the tool as a book. Every book has its own category. Users can categorize notes according to different categories.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="NotebookPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#NotebookPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="NotebookPanelsStayOpen-collapseTwo">
                            Why needs Notebook?
                        </button>
                    </h2>
                    <div id="NotebookPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="NotebookPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>Notes help you to maintain a permanent record of what you have read or listened to. Notetaking keeps your body active and involved and helps you avoid feelings of drowsiness or distraction.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="NotebookPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#NotebookPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="NotebookPanelsStayOpen-collapseThree">
                            How to use?
                        </button>
                    </h2>
                    <div id="NotebookPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="NotebookPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>First users need to sign in (<a href="{{ route('login') }}">here</a>) the system, if not please sign up (<a href="{{ route('register') }}">here</a>). Then the user clicks <strong><i>Add New</i></strong> button to create a new notebook. Enter the notebook and click <strong><i>Add New</i></strong> button to create a new note. Users can enter notes with <i>titles, content and add pictures</i>.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="NotebookPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#NotebookPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="NotebookPanelsStayOpen-collapseFour">
                            Benefit of Notebook
                        </button>
                    </h2>
                    <div id="NotebookPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="NotebookPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>Users can take notes and other things in this notebook app. Our Notebook app is like a combination of a bunch of notebooks. The user gives the notebook a name or a category, then opens the notebook and starts taking notes. You can have multiple notes in one notebook. We designed this feature because we wanted to make it easier for users to arrange notes neatly and read them next time</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h2>To Do List</h2>
            <div class="accordion" id="accordionToDoListPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ToDoListPanelsStayOpen-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ToDoListPanelsStayOpen-collapseOne" aria-expanded="true" aria-controls="ToDoListPanelsStayOpen-collapseOne">
                            What is To Do List?
                        </button>
                    </h2>
                    <div id="ToDoListPanelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="ToDoListPanelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p><strong>To Do List</strong> is a list of things that one wants to get done or that need to get done. User can organizing their tasks with a list can make everything much more manageable and make them feel grounded.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ToDoListPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ToDoListPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="ToDoListPanelsStayOpen-collapseTwo">
                            Why needs To Do List?
                        </button>
                    </h2>
                    <div id="ToDoListPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="ToDoListPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p><strong>To Do List</strong> helps the user seeing a clear outline of  completed and uncompleted tasks and this also helps the user feel organized and stay mentally focused.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ToDoListPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ToDoListPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="ToDoListPanelsStayOpen-collapseThree">
                            How to use?
                        </button>
                    </h2>
                    <div id="ToDoListPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="ToDoListPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>First users need to sign in (<a href="{{ route('login') }}">here</a>) the system, if not please sign up (<a href="{{ route('register') }}">here</a>). The user can then enter the title and content of the to-do item. Users can choose whether to fill in the content. When the user is finished, the user can choose to press the delete button to indicate that the task is complete.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="ToDoListPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ToDoListPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="ToDoListPanelsStayOpen-collapseFour">
                            Benefit of To do list
                        </button>
                    </h2>
                    <div id="ToDoListPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="ToDoListPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>The user can view the completed task and the uncompleted task and make the arrangement and schedule to complete the task without procrastination</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <h2>Four-quadrant Matrix</h2>
            <div class="accordion" id="accordionFourQuadrantMatrixPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FourQuadrantMatrixPanelsStayOpen-collapseOne" aria-expanded="true" aria-controls="FourQuadrantMatrixPanelsStayOpen-collapseOne">
                            What is Four-quadrant Matrix?
                        </button>
                    </h2>
                    <div id="FourQuadrantMatrixPanelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="FourQuadrantMatrixPanelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p><strong>Four-quadrant Matrix</strong> method of time management lets you prioritize what is important and focus on that.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="FourQuadrantMatrixPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FourQuadrantMatrixPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="FourQuadrantMatrixPanelsStayOpen-collapseTwo">
                            Why needs Four-quadrant Matrix?
                        </button>
                    </h2>
                    <div id="FourQuadrantMatrixPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="FourQuadrantMatrixPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>By prioritizing your tasks across <strong>Four-quadrant Matrix</strong>, you can differentiate between tasks that make a real difference in the end.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="FourQuadrantMatrixPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FourQuadrantMatrixPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="FourQuadrantMatrixPanelsStayOpen-collapseThree">
                            How to use?
                        </button>
                    </h2>
                    <div id="FourQuadrantMatrixPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="FourQuadrantMatrixPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>First users need to sign in (<a href="{{ route('login') }}">here</a>) the system, if not please sign up (<a href="{{ route('register') }}">here</a>). After that, users can classify task priorities according to Important Urgent, Important Not Urgent, Not Important Urgent and Not Important Not Urgent.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="FourQuadrantMatrixPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FourQuadrantMatrixPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="FourQuadrantMatrixPanelsStayOpen-collapseFour">
                            Benefit of Four Quadrant Matrix
                        </button>
                    </h2>
                    <div id="FourQuadrantMatrixPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="FourQuadrantMatrixPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>The person can view the prioritize task and male the arrangement and schedule to complete the task without delaying and procrastination.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4 mb-4">
            <h1>JomBlock</h1>
            <div class="accordion" id="accordionJomBlockPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseOne" aria-expanded="true" aria-controls="JomBlockPanelsStayOpen-collapseOne">
                            What is JomBlock?
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="JomBlockPanelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p><strong>JomBlock</strong> is a browser extension. Our team figured out how to solve the problem of users being disturbed by external entertainment websites or social platforms. We want to prevent users from trying to open these pages by blocking access to the site.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="JomBlockPanelsStayOpen-collapseTwo">
                            Why needs JomBlock?
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="JomBlockPanelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>JomBlock is an extension designed to help users improve self-discipline and stay focused. We want to use this to enable us to use JomFocus at the same time as we open this extension so that we can get the best out of it. Users can open this extension when using <strong><i><a href="{{ route('viewCountdownTimer') }}">Countdown Timer </a></i></strong> or <strong><i><a href="{{ route('viewPomodoroTimer') }}">Pomodoro Timer </a></i></strong>.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseThree" aria-expanded="false" aria-controls="JomBlockPanelsStayOpen-collapseThree">
                            Why we design JomBlock?
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="JomBlockPanelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>We designed <strong>JomBlock</strong> so that users don't get distracted when they're focusing on something. Users can type in the sites they want to block, such as entertainment sites or social media. With this extension, we want users to stay focused and undistracted at all times.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseFour" aria-expanded="false" aria-controls="JomBlockPanelsStayOpen-collapseFour">
                            How to use?
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="JomBlockPanelsStayOpen-headingFour">
                        <div class="accordion-body">
                            <p>First, users <strong>download</strong> the extension. Then <strong>unzip</strong> the file and add it to the browser. Then user click <i>options</i> to open the JomBlock page. Users type in unproductivity Sites format <i>like (facebook.com)</i>. The user clicks save button and "block now" checkbox to start blocking. Stop blocking when click again the checkbox.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseFive" aria-expanded="false" aria-controls="JomBlockPanelsStayOpen-collapseFive">
                            How set up in browser (Google Chrome)
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="JomBlockPanelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <p>1. Unzip the downloaded files.</p>
                            <p>2. Open browser.</p>
                            <p>3. Open the <strong><i>Settings</i></strong> page.</p>
                            <p>4. Open the <strong><i>Extensions</i></strong>in the <i>More</i> icon.</p>
                            <p>5. Make sure <strong><i>Developer mode</i></strong> is active.</p>
                            <p> 6. Click the <strong><i>Load unpacked</i></strong> button and upload the <i>extension file</i>.</p>
                            <img src="{{asset('/images/JomBlock_success.png')}}" alt="JomBlock Success update" >
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseSix" aria-expanded="false" aria-controls="JomBlockPanelsStayOpen-collapseSix">
                            How set up in browser (Microsoft Edge)
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="JomBlockPanelsStayOpen-headingSix">
                        <div class="accordion-body">
                            <p>1. Unzip the downloaded files.</p>
                            <p>2. Open browser.</p>
                            <p>4. Open the <strong><i>Extensions</i></strong>.</p>
                            <p>5. Make sure <strong><i>Developer mode</i></strong> is active.</p>
                            <p> 6. Click the <strong><i>Load unpacked</i></strong> button and upload the <i>extension file</i>.</p>
                            <img src="{{asset('/images/JomBlock_success_edge.png')}}" alt="JomBlock Success update" >
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="JomBlockPanelsStayOpen-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#JomBlockPanelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="JomBlockPanelsStayOpen-collapseSeven">
                            Who is JomBlock's target user?
                        </button>
                    </h2>
                    <div id="JomBlockPanelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="JomBlockPanelsStayOpen-headingSeven">
                        <div class="accordion-body">
                            <p>We designed JomBlock to help users who are often distracted by social media, entertainment platforms and so on when it comes to focus time. With JomBlock, users will be blocked when they try to open a custom blocked site</p>
                        </div>
                    </div>
                </div>
            </div>
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
    document.title="Frequently asked questions | Jom Focus"
</script>
@endsection