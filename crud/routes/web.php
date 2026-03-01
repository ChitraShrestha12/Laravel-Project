<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'showUser')->name('home');
    Route::get('/add', 'addForm')->name('add.form');
    Route::post('/add', 'addUser')->name('add');
    Route::get('/update/{id}', 'update')->name('update.form');
    Route::post('/update', 'updateUser')->name('update');
    Route::get('/delete/{id}', 'deleteUser')->name('delete');
});
