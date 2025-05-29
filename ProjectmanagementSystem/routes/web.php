<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index',[ProjectController::class,'index'])->name('projects.index');
Route::get('/projects/create',[ProjectController::class,'create'])->name('projects.create');
Route::post('/index',[ProjectController::class,'store'])->name('projects.store');
 Route::get('/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::patch('/update', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/delete', [ProjectController::class, 'destroy'])->name('projects.destroy');

    Route::get('/index',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/index',[TaskController::class,'store'])->name('tasks.store');
 Route::get('/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::patch('/update', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/delete', [TaskController::class, 'destroy'])->name('tasks.destroy');


require __DIR__.'/auth.php';
