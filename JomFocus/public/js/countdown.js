// Audio
const ringSound = new Audio('/sound/bellringsoundeffect.mp3');
const clickSound = new Audio('/sound/clicksoundeffect.mp3');

// Image and promptText
const cStatusImageArr = ["/images/WorkTime.png","/images/BreakTime.png","/images/StartCountdown.png"];
const cStatusImage = document.getElementById('cStatusImage');
const cStatusStringArr = ["Time to work and stay focus !","Time up and take a break !","Why leave current page? Set focus duration again !","Set your focus duration now !"];
const cStatusString = document.getElementById('cStatusString');

// Time
const c_hours = document.getElementById('c_hours');
const c_minutes = document.getElementById('c_minutes');
const c_seconds = document.getElementById('c_seconds');
const editHours = document.getElementById('editHours');
const editMinutes = document.getElementById('editMinutes');

const cStartBtn = document.getElementById('cStartBtn');
const cCancelBtn = document.getElementById('cCancelBtn');
const cEditBtn = document.getElementById('cEditBtn');
const cSaveBtn = document.getElementById('cSaveBtn'); 

// Goal
const c_goal = document.getElementById('c_goal');
const display_goal = document.getElementById('display_goal');

// Modal
const noFinishBtn = document.getElementById('noFinishBtn');
const finishBtn = document.getElementById('finishBtn'); 

// Prompt text
var alertPlaceholder = document.getElementById('liveAlertPlaceholder')

// undefined variable
let statusCountdownTimer;
let hours, minutes ="";
let goal;
let withPoint=0;

cEditBtn.addEventListener('click',function(){
    clickSound.play();
});
cSaveBtn.addEventListener('click',function(){
    clickSound.play();
    setDuration();
});

cStartBtn.addEventListener('click',function(){
    clickSound.play();
    if(statusCountdownTimer === undefined){
        if(c_hours.innerText==0 && c_minutes.innerText==0 && c_seconds.innerText==0){
            alert("Please set your duration");
        }
        else{
            cStartBtn.classList.add('hidden');
            cEditBtn.classList.add('hidden');
            cCancelBtn.classList.remove('hidden');
            // change points 
            if(c_minutes.innerText>=1 || c_hours.innerText!=0){
                withPoint=1;
            }else{
                withPoint=0;
            }
            statusCountdownTimer = setInterval(startCountdown,1000);
        }
    }else{
        alert('Countdown timer already running');
    }
});

cCancelBtn.addEventListener('click',function(){
    clickSound.play();
    resetCountdownTimer();
    stopCountdownTimer();
    cStatusImage.src = cStatusImageArr[2];
    cStatusString.innerText = cStatusStringArr[3];
    display_goal.innerText= "Set your goal now!"
    statusCountdownTimer = undefined;
    cCancelBtn.classList.add('hidden');
    cStartBtn.classList.remove('hidden');
    cEditBtn.classList.remove('hidden');
});

function setDuration(){
    hours = editHours.value;
    minutes = editMinutes.value;
    if(c_goal.value == ''){
        display_goal.innerText="Set your goal now!";
        alert("Please set your goal before you start countdown timer");
    }else{
        goal = c_goal.value;
        display_goal.innerText=goal
    }
    if(hours==0 && minutes!=0){
        c_hours.innerText="0";
        c_minutes.innerText=minutes;
    }else if(hours!=0 && minutes==0){
        c_hours.innerText=hours;
        c_minutes.innerText="0";
    }else{
        c_hours.innerText=hours;
        c_minutes.innerText=minutes;
    }
    stopCountdownTimer();
    statusCountdownTimer = undefined;
}

function startCountdown(){
    //run sticky mode
    stickyMode();
    // Change Image
    cStatusImage.src = cStatusImageArr[0];
    cStatusString.innerText = cStatusStringArr[0];

    if(c_hours.innerText==0 && c_minutes.innerText==0 && c_seconds.innerText==0){
        if(Notification.permission === 'granted'){
            const statusFinish = "Your focus duration is finish and take a break now !";
            new Notification(statusFinish);
        }
        c_hours.innerText="0";
        c_minutes.innerText="0";
        c_seconds.innerText="0";
        ringSound.play();
        cStartBtn.classList.remove('hidden');
        cEditBtn.classList.remove('hidden');
        cCancelBtn.classList.add('hidden');
        stopCountdownTimer();
        statusCountdownTimer = undefined;

        cStatusImage.src = cStatusImageArr[1];
        cStatusString.innerText = cStatusStringArr[1];
        if(withPoint==0){
            $("#promptAfterCountdown").modal('show');
        }else if(withPoint==1){
            $("#promptAfterCountdownWithPoint").modal('show');
        }

    }else if(c_seconds.innerText !=0){
        c_seconds.innerText--;
    }else if(c_minutes.innerText!=0 && c_seconds.innerText==0){
        c_seconds.innerText=59;
        c_minutes.innerText--;
    }else if(c_hours.innerText !=0 && c_minutes.innerText==0){
        c_minutes.innerText=60;
        c_hours.innerText--;
    }
}

function stopCountdownTimer(){
    clearInterval(statusCountdownTimer);
}

function resetCountdownTimer(){
    c_hours.innerText="0";
    c_hours.value="0";
    c_minutes.innerText="0";
    c_minutes.value="0";
    c_seconds.innerText="0";
    c_seconds.value="0";
    c_goal.innerText="";
    c_goal.value="";
}

function stickyMode(){
    document.addEventListener("visibilitychange",function(){
        if (document.visibilityState === 'hidden'){
            stopCountdownTimer();
            c_hours.innerText="0";
            c_minutes.innerText="0";
            c_seconds.innerText="0";
            statusCountdownTimer = undefined;
            cStartBtn.classList.remove('hidden');
            cEditBtn.classList.remove('hidden');
            cCancelBtn.classList.add('hidden');
            cStatusImage.src = cStatusImageArr[2];
            cStatusString.innerText = cStatusStringArr[2];
        }
    })
}

noFinishBtn.addEventListener('click',function(){
    $("#countdownSetting").modal('show');
    cSaveBtn.addEventListener('click',function(){
        $("#countdownSetting").modal('hide');
    })
});

document.addEventListener('DOMContentLoaded', function(){
    //notification permission
    if ('Notification' in window){
        if (Notification.permission !== 'granted' && Notification.permission !== 'denied') {
            Notification.requestPermission().then(function(permission) {
        if (permission === 'granted') {
            new Notification('My dear, you will be notified when the time up');
        }
      });
    }
  }
});

