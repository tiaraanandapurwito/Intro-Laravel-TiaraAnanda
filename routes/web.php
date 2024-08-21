<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/welcome', [AuthController::class, 'welcome']);

Route::get('/table', [TableController::class, 'table']);
Route::get('/datatable', [TableController::class, 'datatable']);