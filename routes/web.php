<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [SiswaController::class, 'profile'])->name('profile')->middleware('Guru');
Route::post('/register', [SiswaController::class, 'register'])->name('register');
Route::get('/siswas', [SiswaController::class, 'index'])->middleware('auth');
Route::get('/siswas/create', [SiswaController::class, 'create'])->middleware('Guru');
Route::get('/siswas/{id}', [SiswaController::class, 'show'])->middleware('Guru');
Route::post('/siswas', [SiswaController::class, 'store'])->middleware('Guru');
route::get('/siswas/{id}/edit', [SiswaController::class, 'edit'])->middleware('Guru');
Route::patch('/siswas/{id}', [SiswaController::class, 'update'])->middleware('Guru');
Route::delete('/siswas/{id}', [SiswaController::class, 'delete'])->middleware('Guru');
