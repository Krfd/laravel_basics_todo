<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Todo Routes
Route::post('/addtodo', [TodoController::class, 'create'])->name('addtodo');


// Route::get('/hello', function () {
//     return "<h1>Hello world!</h1>";
// });

Auth::routes();

