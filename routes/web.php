<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/PostagemByCategoriaById/{id}', [SiteController::class, 'PostagemByCategoriaById'])->name('site.PostagemByCategoriaById');
Route::get('/PostagemByAutorId/{id}', [SiteController::class, 'PostagemByAutorById'])->name('site.PostagemByAutorById');

Auth::routes();
Route::middleware(['auth'])->group(function () {



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//-------------------------CATEGORIAS----------------------------------------------------

Route::get ('/categoria/', [CategoriaController::class, 'index'])->name ('categoria.index');

Route::get ('/categoria/create', [CategoriaController::class, 'create'])->name ('categoria.create');

Route::POST ('/categoria', [CategoriaController::class, 'store'])->name ('categoria.store');

Route::get ('/categoria/{id}', [CategoriaController::class, 'show'])->name ('categoria.show');

Route::get ('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name ('categoria.edit');

Route::put ('/categoria/{id}', [CategoriaController::class, 'update'])->name ('categoria.update');

Route::delete ('/categoria/{id}', [CategoriaController::class, 'destroy'])->name ('categoria.destroy');


//-------------------------POSTAGENS----------------------------------------------------

Route::get ('/postagem/', [PostagemController::class, 'index'])->name ('postagem.index');

Route::get ('/postagem/create', [PostagemController::class, 'create'])->name ('postagem.create');

Route::POST ('/postagem', [PostagemController::class, 'store'])->name ('postagem.store');

Route::get ('/postagem/{id}', [PostagemController::class, 'show'])->name ('postagem.show');

Route::get ('/postagem/{id}/edit', [PostagemController::class, 'edit'])->name ('postagem.edit');

Route::put ('/postagem/{id}', [PostagemController::class, 'update'])->name ('postagem.update');

Route::delete ('/postagem/{id}', [PostagemController::class, 'destroy'])->name ('postagem.destroy');

//Admin
Route::get ('/admin/alterarSenha', [UserController::class, 'alterarSenha'])->name ('admin.alterarSenha');
Route::put ('/admin/updateSenha', [UserController::class, 'updateSenha'])->name ('admin.updateSenha');



});
