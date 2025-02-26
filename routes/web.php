<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CourseController;

Route::get('/Signup',[AuthController::class,'showSignup']);
Route::post('/Signup',[AuthController::class,'Signup']);

Route::get('/Login',[AuthController::class, 'showLogin'])->name('Login');
Route::post('/Login',[AuthController::class,'Login']);

Route::get('/Dashboard', [StudentsController::class, 'Dashboard'])->name('Dashboard');
Route::get('/Logout',[AuthController::class,'Logout']);

Route::resource('Students', StudentsController::class);
Route::delete('/Students/{student}', [StudentsController::class, 'destroy'])->name('Students.destroy');


Route::get('/courses', [CourseController::class, 'index'])->name('courses');