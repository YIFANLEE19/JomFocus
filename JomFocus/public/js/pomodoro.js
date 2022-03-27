// Audio
const ringSound = new Audio('/sound/bellringsoundeffect.mp3');
const clickSound = new Audio('/sound/clicksoundeffect.mp3');
// Selectors Pomodoro Timer
const modeBtn = document.querySelector('#mode-buttons');
const actionBtn = document.getElementById('action-btn');
const dispGoal = document.getElementById('dispGoal');
const p_goal = document.getElementById('p_goal');
const saveGoalBtn = document.getElementById('saveGoalBtn');
const goalBtn = document.getElementById('goalBtn');
const confirmBtn = document.getElementById('confirmBtn');
const confirmResetBtn = document.getElementById('confirmResetBtn');
const confirmWithPointsBtn = document.getElementById('confirmWithPointsBtn');
// variable Pomodoro Timer
// edit 25 to 1
const timer = {
    workTime:25,
    shortBreakTime:5,
    longBreakTime:15,
    longBreakInterval:4,
    status:0,
};
// edit
let interval;
let withPoint =0;
// event listeners pomodoro timer
modeBtn.addEventListener('click',detectMode);
actionBtn.addEventListener('click',function(){
    clickSound.play();
    if(p_goal.value == ""){
        alert("Please set your goal");
    }else{
        clickSound.play();
        goalBtn.classList.add('hidden');
        confirmBtn.classList.remove('hidden');
        const { action } = actionBtn.dataset;
        if(action == 'start'){
            start();
        }else{
            stop();
        }
    }
});

// pomodoro function
function detectMode(event) {
    clickSound.play();
    const { mode } = event.target.dataset;
    if (!mode) return;
    switchMode(mode);
    stop();
}
function start() {
    let { total } = timer.remainingTime;
    const endTime = Date.parse(new Date()) + total * 1000;
    //check if time mode is work time then status +1
    if(timer.mode === 'workTime') timer.status++;
    interval = setInterval(function() {
      timer.remainingTime = getRemainingTime(endTime);
      update();
  
      total = timer.remainingTime.total;
      //switch mode when x finish 
      if (total <= 0) {
        clearInterval(interval);

        switch(timer.mode){
            case 'workTime': 
                if(timer.status % timer.longBreakInterval === 0){
                    ringSound.play();
                    switchMode('longBreakTime');
                    confirmWithPointsBtn.classList.remove('hidden');
                    confirmBtn.classList.add('hidden');
                }else{
                    ringSound.play();
                    switchMode('shortBreakTime');
                }
                break;
            default: 
                switchMode('workTime');
                ringSound.play();
        }

        if(Notification.permission === 'granted'){
            const promptText = timer.mode === 'workTime' ? "My dear,it's time to work" : "My dear, please take a break now !";
            new Notification(promptText);
        }
        start();
      }
    }, 1000);

    actionBtn.dataset.action="stop";
    actionBtn.textContent= 'stop';
    actionBtn.classList.add('active');
}
function stop(){
    clearInterval(interval);
    actionBtn.dataset.action="start";
    actionBtn.textContent= 'start';
    actionBtn.classList.remove('active');
}
function update() {
    const { remainingTime } = timer;
    const minutes = `${remainingTime.minutes}`.padStart(2, '0');
    const seconds = `${remainingTime.seconds}`.padStart(2, '0');
    const minute = document.getElementById('p-minutes');
    const second = document.getElementById('p-seconds');
    minute.textContent = minutes;
    second.textContent = seconds;
    document.title = `${minutes}:${seconds} - Pomodoro Timer | Jom Focus`;
}
function switchMode(mode) {
    timer.mode = mode;
    timer.remainingTime = {
      total: timer[mode] * 60,
      minutes: timer[mode],
      seconds: 0,
    };
    document
      .querySelectorAll('button[data-mode]')
      .forEach(e => e.classList.remove('active'));
    document.querySelector(`[data-mode="${mode}"]`).classList.add('active');
  
    update();
}
function getRemainingTime(endTime) {
    const currentTime = Date.parse(new Date());
    const difference = endTime - currentTime;
    const total = Number.parseInt(difference / 1000, 10);
    const minutes = Number.parseInt((total / 60) % 60, 10);
    const seconds = Number.parseInt(total % 60, 10);
  
    return {
      total,
      minutes,
      seconds,
    };
}
document.addEventListener('DOMContentLoaded', function(){
    //notification permission
    if ('Notification' in window){
        if (Notification.permission !== 'granted' && Notification.permission !== 'denied') {
            Notification.requestPermission().then(function(permission) {
        if (permission === 'granted') {
            new Notification('Dear {{ Auth::user()->name }}, you will be notified at the start of each status');
        }
      });
    }
  }
    switchMode('workTime');
});

saveGoalBtn.addEventListener('click',function(){
    let goal = p_goal.value;
    if(goal == ""){
        dispGoal.innerText="Please set your goal";
    }else{
        dispGoal.innerText= goal;
    }
});

confirmBtn.addEventListener('click',function(){
    clickSound.play();
    stop();
});
confirmResetBtn.addEventListener('click',function(){
    switchMode('workTime');
    dispGoal.innerText="Set your goal now!";
    stop();
    goalBtn.classList.remove('hidden');
    confirmBtn.classList.add('hidden');

});

goalBtn.addEventListener('click',function(){
    clickSound.play();
});

