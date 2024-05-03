<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/',[RoleUserController::class,'index']);
Route::get('/prueba',[UserPostController::class,'index'])->name('prueba');;
require __DIR__.'/auth.php';
