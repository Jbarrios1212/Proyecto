<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/service',[ServiceController::class,'index'])->name('apiService.index');

//Route::post('/', [LoginController::class, 'session']);

// RUTAS CRUD
Route::resource('/persona',PersonaController::class);
