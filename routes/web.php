<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

//jobs
Route::get('/', [JobController::class,'index']);

// register
Route::get('/register', [RegisterUserController::class,'create']);
Route::post('/register', [RegisterUserController::class,'store']);

// login
Route::get('/login', [SessionController::class,'create']);
Route::post('/login', [SessionController::class,'store']);
Route::delete('/logut', [SessionController::class,'destroy']);
