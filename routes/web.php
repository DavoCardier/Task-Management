<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;


Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/', [TaskController::class, 'index'])->name('home');

Route::resource('tasks', TaskController::class);

Route::post('/tasks/{task}/comments', [CommentController::class, 'store']);

Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
