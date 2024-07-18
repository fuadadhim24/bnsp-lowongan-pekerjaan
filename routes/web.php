<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
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
