<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', function() { //Esto retornara recourse/views/note/index.blade.php (sin necesidad de escribirlo todo)
         
    $notes = [
        'Primera nota',
        'Segunda nota',
        'Tercera nota',
        'Cuarta nota',
        'Quinta nota',
    ];

    return view('notes.index')->with('notes', $notes); //También puedes usar el método –>with('notes', $notes) o el método ->withNotes($notes)
});