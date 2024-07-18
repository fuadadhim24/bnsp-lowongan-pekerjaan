<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']
);

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/home/store', [LamaranController::class, 'store'])->name('user.lamar.store');
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('user.profile.update');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/lowongan', [HomeController::class, 'adminLowongan'])->name('admin.lowongan');
    Route::post('/admin/lowongan/store', [HomeController::class, 'store'])->name('admin.lowongan.store');
    Route::put('/admin/lowongan/{id}', [HomeController::class, 'update'])->name('admin.lowongan.update');
    Route::delete('/admin/lowongan/{id}', [HomeController::class, 'destroy'])->name('admin.lowongan.destroy');
});
