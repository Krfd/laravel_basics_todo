<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'display'])->name('home');

// Todo Routes
Route::post('/addtodo', [TodoController::class, 'create'])->name('addtodo');


// Route::get('/hello', function () {
//     return "<h1>Hello world!</h1>";
// });
