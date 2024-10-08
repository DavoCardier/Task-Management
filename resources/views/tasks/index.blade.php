<h1>Lista de Tareas</h1>

<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Crear Nueva Tarea</a>

<div class="card">
    <div class="card-header">
        <h3>Todas las Tareas</h3>
    </div>
    <div class="card-body">
        @foreach ($tasks as $task)
            <div class="mb-3">
                <strong>{{ $task->title }}</strong>
                <small>({{ $task->status }})</small>
                <p>{{ Str::limit($task->description, 100) }}</p>
                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
