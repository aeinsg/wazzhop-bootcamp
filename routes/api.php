<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//http://127.0.0.1:8000/api/register
Route::post('register', [App\Http\Controllers\UserController::class, 'store']);

//http://127.0.0.1:8000/api/users
Route::get('users', [App\Http\Controllers\UserController::class, 'index']);

//http://127.0.0.1:8000/api/users/{id}
Route::patch('users/{user}', [App\Http\Controllers\UserController::class, 'update']);

//http://127.0.0.1:8000/api/users/{id}
Route::delete('users/{user}', [App\Http\Controllers\UserController::class, 'destroy']);

