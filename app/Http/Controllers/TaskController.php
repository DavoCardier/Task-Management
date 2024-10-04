<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:15|max:300',
            'due_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $task = Task::create($validatedData);
        
    }

    public function index()
    {
        return Task::orderBy('id', 'desc')->get();
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:15|max:300',
            'due_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);
        
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        
    }
}
