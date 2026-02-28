<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'Home')->name('home');
    Route::get('/galary','Gallary')->name('gallary');
    Route::post('/imageUpload','ImageUpload')->name('imageUpload');
});
