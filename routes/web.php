<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Auth::routes();

//Route::resource('/', TodoController::class);
Route::resource('todo', TodoController::class);
