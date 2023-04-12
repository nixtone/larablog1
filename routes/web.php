<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::name('user.')->group(function() {
    Route::view('/private', 'user.private')->middleware('auth')->name('private');

    Route::get('/login', function() {
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('user.login');
    })->name('login');

    Route::post('/login', [UserController::class, 'login']);

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/reg', function() {
        if(Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('user.reg');
    })->name('reg');

    Route::post('/reg', [UserController::class, 'save']);
});

Route::name('post.')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('list');
    Route::get('/deleted', [PostController::class, 'listDeleted'])->name('list.deleted');
    Route::get('/post/{post}/restore', [PostController::class, 'restore'])->name('restore');
    Route::get('/post/create', [PostController::class, 'create'])->name('create');
    Route::post('/post', [PostController::class, 'store'])->name('store');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('item');
    Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::patch('/post/{post}/update', [PostController::class, 'update'])->name('update');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('delete');
    Route::get('/delete-hard/{post}', [PostController::class, 'destroyHard'])->name('delete.hard');

});
