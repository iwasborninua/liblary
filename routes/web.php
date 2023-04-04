<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/view/{id}', [BookController::class, 'view'])->name('book.view');
    Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');
    Route::get('/update/{id}', [BookController::class, 'update'])->name('update');
    Route::put('/update/{id}', [BookController::class, 'bookUpdate'])->name('book.update');
    Route::post('/book', [BookController::class, 'createBook'])->name('book.create');
    Route::get('/create', [BookController::class, 'showCreateForm'])->name('book.createForm');
});

