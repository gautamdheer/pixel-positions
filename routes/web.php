<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

//jobs
Route::get('/', [JobController::class,'index']);
Route::get('/search',SearchController::class);


Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisterUserController::class,'create']);
    Route::post('/register', [RegisterUserController::class,'store']);
    Route::get('/login', [SessionController::class,'create']);
    Route::post('/login', [SessionController::class,'store']);
});

Route::delete('/logut', [SessionController::class,'destroy']);
