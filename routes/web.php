<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Các route public cho đăng ký và đăng nhập
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Các route chỉ dành cho user đã đăng nhập
Route::middleware('auth')->group(function () {
    // Trang danh sách khóa học – render index.blade.php
    Route::get('/courses', [CourseController::class, 'index'])->name('course.index');

    // Các route quản lý khóa học (CRUD)
    Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('course.store');
    
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('course.update');
    
    Route::get('/courses/{course}/show', [CourseController::class, 'show'])->name('course.show');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
});
