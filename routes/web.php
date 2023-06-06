<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/', [StudentController::class, 'store'])->name('students.store');
Route::get('/{id}', [StudentController::class, 'show'])->name('students.show');







// Route::resource('/', [StudentController::class]);