<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

Route::get('/', [ContactController::class, 'index']);

Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'thanks']);
Route::post('/store', [ContactController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');

Route::get('/register', [ContactController::class, 'register']);
Route::get('/login', [ContactController::class, 'login']);

Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/admin/{id}', [ContactController::class, 'show']);
Route::delete('/admin/{id}', [ContactController::class, 'destroy'])->name('admin.destroy');

Route::get('/index', [AuthController::class, 'index']);