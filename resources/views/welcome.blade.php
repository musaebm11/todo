<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 p-10" x-data="{
    todos: [],
    newTodo: '',
    loadTodos() {
        const storedTodos = localStorage.getItem('todos');
        this.todos = storedTodos ? JSON.parse(storedTodos) : [];
    },
    saveTodos() {
        localStorage.setItem('todos', JSON.stringify(this.todos));
    },
    addTodo() {
        if (this.newTodo.trim() === '') return;
        this.todos.push({ text: this.newTodo, done: false });
        this.newTodo = '';
        this.saveTodos();
    },
    deleteTodo(index) {
        this.todos.splice(index, 1);
        this.saveTodos();
    },
    openFingerprintModal() {
        // Placeholder for fingerprint modal logic
        alert('Fingerprint modal opened!');
    }
}" x-init="loadTodos()">
    <div class="max-w-xl mx-auto bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-4">📝 Todo List</h1>

        <div class="flex mb-4">
            <input x-model="newTodo" @keyup.enter="addTodo" type="text" placeholder="New task"
                class="flex-grow border p-2 rounded-l">
            <button type="button" x-on:click="addTodo()" class="bg-blue-500 text-white px-4 rounded-r">Add</button>
        </div>

        <template x-for="(todo, index) in todos" :key="index">
            <div class="flex items-center justify-between bg-gray-100 p-2 rounded mb-2">
                <div>
                    <input type="checkbox" x-model="todo.done" @change="saveTodos" class="mr-2">
                    <span :class="{ 'line-through text-gray-500': todo.done }" x-text="todo.text"></span>
                </div>
                <button @click="deleteTodo(index)"  class="text-red-500">🗑️</button>
            </div>
        </template>

        <div class="text-sm text-gray-600 mt-4">
            <span x-text="todos.length"></span> task(s) total
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
