<?php

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

Route::name('post.')->group(function() {
    Route::get('/', function () { return view('post.list'); })->name('list');
    Route::get('/post/create', function () { return view('post.create'); })->name('create');
    Route::get('/post/{post}', function () { return view('post.item'); })->name('item');
    Route::get('/photos/{post}/edit', function () { return view('post.edit'); })->name('edit');
});
