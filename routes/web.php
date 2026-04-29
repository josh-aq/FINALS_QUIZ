<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
   Route::get('student',[\App\Http\Controllers\studentmngController::class,'index'])->name('student.index');
   Route::get('student/create',[\App\Http\Controllers\studentmngController::class,'create'])->name('student.add');
   Route::post('student',[\App\Http\Controllers\studentmngController::class,'store'])->name('student.store');
   Route::get('student/{id}/edit',[\App\Http\Controllers\studentmngController::class,'edit'])->name('student.edit');
   Route::put('student/{id}',[\App\Http\Controllers\studentmngController::class,'update'])->name('student.update');
   Route::delete('student/{id}',[\App\Http\Controllers\studentmngController::class,'destroy'])->name('student.destroy');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
