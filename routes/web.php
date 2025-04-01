<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//-------------------------CATEGORIAS----------------------------------------------------

Route::get ('/categoria/', [CategoriaController::class, 'index'])->name ('categoria.index');

Route::get ('/categoria/create', [CategoriaController::class, 'create'])->name ('categoria.create');

Route::POST ('/categoria', [CategoriaController::class, 'store'])->name ('categoria.store');

Route::get ('/categoria/{id}', [CategoriaController::class, 'show'])->name ('categoria.show');
