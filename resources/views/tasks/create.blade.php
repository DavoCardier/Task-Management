<h1>Crear Nueva Tarea</h1>

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="due_date">Fecha de Vencimiento:</label>
        <input type="date" id="due_date" name="due_date" class="form-control">
    </div>
    <div class="form-group">
        <label for="status">Estado:</label>
        <select id="status" name="status" class="form-select" required>
            <option value="">Seleccione un estado</option>
            <option value="pending">Pendiente</option>
            <option value="in_progress">En Proceso</option>
            <option value="completed">Completa```
