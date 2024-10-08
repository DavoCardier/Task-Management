<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->paginate(10);
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'due_date' => 'nullable|date',
            'status' => 'required|string|max:20'
        ]);

        Task::create($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Tarea creada exitosamente.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'due_date' => 'nullable|date',
            'status' => 'required|string|max:20'
        ]);

        $task->update($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada exitosamente.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada exitosamente.');
    }
}
