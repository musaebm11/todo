import "./bootstrap";
 
// function todoApp() {
   
//     return {
//         todos: [],
//         newTodo: "",
//         loadTodos() {
//             const stored = localStorage.getItem("todos");
//             this.todos = stored ? JSON.parse(stored) : [];
//         },
//         saveTodos() {
//             localStorage.setItem("todos", JSON.stringify(this.todos));
//         },
//         addTodo() {
//             if (this.newTodo.trim() !== "") {
//                 this.todos.push({
//                     text: this.newTodo,
//                     done: false,
//                 });
//                 this.newTodo = "";
//                 this.saveTodos();
//             }
//         },
//         deleteTodo(index) {
//             this.todos.splice(index, 1);
//             this.saveTodos();
//         },
//     };
// }
