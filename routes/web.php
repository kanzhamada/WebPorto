<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProjectController::class, 'index'])->name('index');
Route::get('/create', [ProjectController::class, 'create'])->name('create');
Route::post('store/', [ProjectController::class, 'store'])->name('store');
Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/edit/{project}', [ProjectController::class, 'update'])->name('update');
Route::delete('/{project}', [ProjectController::class, 'destroy'])->name('destroy');

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
