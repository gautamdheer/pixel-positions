<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::get('/', [JobController::class,'index'])->name('index');
Route::post('/jobs', [JobController::class,'create'])->name('create');
