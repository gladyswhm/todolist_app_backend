<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\todolist_controller;
use App\Http\Controllers\todos_controller;

//to do list route
Route::get('/todo-lists', [todolist_controller::class, 'index']);
Route::post('/todo-lists', [todolist_controller::class, 'store']);
Route::get('/todo-lists', [todolist_controller::class, 'show']);
Route::put('/todo-lists', [todolist_controller::class, 'update']);
Route::delete('/todo-lists', [todolist_controller::class, 'destroy']);

//to do items route
Route::get('/todos', [todos_controller::class, 'index']);
Route::post('/todos', [todos_controller::class, 'store']);
Route::get('/todos', [todos_controller::class, 'show']);
Route::put('/todos', [todos_controller::class, 'update']);
Route::delete('/todos', [todos_controller::class, 'destroy']);
