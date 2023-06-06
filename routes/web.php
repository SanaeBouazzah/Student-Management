<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function(){return view('layouts.layout');})->name('home');

Route::resource('/students', StudentController::class);
Route::resource('/teachers', StudentController::class);






