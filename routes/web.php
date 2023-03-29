<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::name('post.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('list');
    Route::get('/post/create', [PostController::class, 'create'])->name('create');
    Route::post('/post', [PostController::class, 'store'])->name('store');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('item');
    Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::patch('/post/{post}/update', [PostController::class, 'update'])->name('update');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('delete');
});
