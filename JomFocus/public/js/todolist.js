const clickSound = new Audio('/sound/clicksoundeffect.mp3');

// Selectors To do list
const todoInput = document.querySelector('#todo-input');
const todoBtn = document.querySelector('#todo-btn');
const todoList = document.querySelector('#todo-list');
const totalUncompleted = document.getElementById('todolist-count-uncompleted');
const totalTodo = document.getElementById('todolist-count-total');

// Variable to do list
var countTotal = 0;

// event listeners to do list
todoBtn.addEventListener('click',addTodo);
todoList.addEventListener('click',checkDelete);

// to do list function
function addTodo(event){
    clickSound.play();
    event.preventDefault();
    // create element for todo in todolist
    const todoDiv = document.createElement("div");
    todoDiv.classList.add("todolist-todo");
    const newTodo = document.createElement("li");
    newTodo.innerText = todoInput.value;
    newTodo.classList.add("todo-content");
    todoDiv.appendChild(newTodo);
    //button
    const checkBtn = document.createElement('button');
    checkBtn.innerHTML ='<i class="fa fa-check"></i>';
    checkBtn.classList.add("todo-check-btn");
    todoDiv.appendChild(checkBtn);
    const deleteBtn = document.createElement('button');
    deleteBtn.innerHTML ='<i class="fa fa-trash"></i>';
    deleteBtn.classList.add("todo-delete-btn");
    todoDiv.appendChild(deleteBtn);
    //pass to list
    todoList.appendChild(todoDiv);
    todoInput.value="";
    //count ++
    countTotal++;
    totalTodo.innerText = countTotal;
}
function checkDelete(e){
    const item = e.target;
    //Delete function
    if(item.classList[0] === "todo-delete-btn"){
        const todo = item.parentElement;
        todo.classList.add("removeAnimate");
        todo.addEventListener('transitionend',function(){
            todo.remove();
        })
        countTotal--;
        totalTodo.innerText = countTotal;
    }
    //Check function
    if(item.classList[0] === "todo-check-btn"){
        const todo = item.parentElement;
        todo.classList.toggle("completed");
    }
}