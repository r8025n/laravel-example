<!DOCTYPE html>
<html>
<head>
    <title>Laravel Todo App</title>
</head>
<body>
    <h1>Todo List</h1>
    <form method="POST" action="/tasks">
        @csrf
        <input type="text" name="title" required>
        <button type="submit">Add Task</button>
    </form>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
