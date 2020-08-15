var todoInput = document.querySelector(".todo-input");
var todoButton = document.querySelector(".todo-button");
var todoList = document.querySelector(".todo-list");
var filteroption = document.querySelector(".filter-todo")

//Event Listeners
todoButton.addEventListener('click', addTodo);
todoList.addEventListener('click', deletecheck);
filteroption.addEventListener('click', filterTodo);

//functions
function addTodo(event) {
    event.preventDefault();
    //Todo DIV
    const todoDIV = document.createElement('div');
    todoDIV.classList.add('todo');
    //todo LI
    const newtodo = document.createElement('li');
    newtodo.classList.add('todo-item');
    newtodo.innerText = todoInput.value;
    todoDIV.appendChild(newtodo);
    //create check todo
    const completetoDo = document.createElement('button');
    completetoDo.classList.add('complete-btn');
    completetoDo.innerHTML = '<i class="fas fa-check"></i>';
    todoDIV.appendChild(completetoDo);
    //create trash todo
    const trashtoDo = document.createElement('button');
    trashtoDo.classList.add('trash-btn');
    trashtoDo.innerHTML = '<i class="fas fa-trash-alt"></i>';
    todoDIV.appendChild(trashtoDo);
    todoList.appendChild(todoDIV);
    //clear todo input
    todoInput.value = "";
}
function deletecheck(a) {
    const item = a.target;
    //deltete todo
    if (item.classList[0] === 'trash-btn') {
        const todotrash = item.parentElement;
        todotrash.classList.add('fall');
        todotrash.addEventListener('transitionend', function () {
            todotrash.remove();
        })
        // todo.remove();
    }
    //check mark
    if (item.classList[0] === 'complete-btn') {
        const todo = item.parentElement;
        todo.classList.toggle("complete");
    }

}

function filterTodo(e) {
    const todos = todoList.childNodes;
    todos.forEach(function (todo) {
        switch (e.target.value) {
            case "all":
                todo.style.display = "flex";
                break;
            case "complete":
                if (todo.classList.contains("complete")) {
                    todo.style.display = "flex";
                }
                else {
                    todo.style.display = "none";
                }
                break;
            case "uncomplete":
                if (!todo.classList.contains('complete')) {
                    todo.style.display = "flex";
                }
                else {
                    todo.style.display = "none";
                }
                break;
        }
    })
}