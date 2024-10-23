<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIfLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/auth', [AuthController::class, 'auth']);
});

Route::middleware([CheckIfLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/newNote', [MainController::class, 'newNote'])->name('new');
    Route::post('/newNote', [MainController::class, 'storeNote'])->name('store');
    Route::get('/editNote/{id}', [MainController::class, 'editNote'])->name('edit');
    Route::post('/editNoteSubmit/{id}', [MainController::class, 'updateNote'])->name('update');
    Route::get('/deleteNote/{id}', [MainController::class, 'deleteNote'])->name('delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


