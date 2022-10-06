<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/books', BookController::class);

Route::resource('/collections', GenreController::class);

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
  Route::get('/', [AdminController::class, 'index']);
  Route::post('/', [AdminController::class, 'store']);
  Route::get('/create', [AdminController::class, 'create']);
  Route::get('/{book}', [AdminController::class, 'show']);
  Route::get('/{book}/edit', [AdminController::class, 'edit']);
  Route::put('/{book}', [AdminController::class, 'update']);
  Route::delete('/{book}', [AdminController::class, 'destroy']);
});

Route::prefix('superadmin')->middleware('auth')->group(function () {
  Route::view('/', 'superadmin.index')->name('superadmin');
  Route::get('/authors', [SuperAdminController::class, 'list'])->name('authors.list');
  Route::delete('/authors/{id}', [SuperAdminController::class, 'destroy'])->name('authors.delete');
});


Route::resource('authors', AuthorController::class);
