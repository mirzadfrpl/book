<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);



Route::get('/books', [BookController::class, 'index'])
    ->middleware('role:admin')
    ->name('books.index');

Route::middleware('role:admin')->group(function () {
        Route::resource('books', BookController::class);
    });



// Route::resource('/books', BookController::class);

// Route untuk Auth (Login & Register)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');











