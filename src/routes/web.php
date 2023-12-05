<?php

use \Illuminate\Support\Facades\Route;
use Mbayurov\OtusLaravelHw11\Controllers\ImageController;

if (!config('hw11.enabled')) {
    return;
}

Route::group(
    ['prefix' => config('hw11.prefix'), 'as' => 'hw11.'],
    function () {
        Route::get('/form', [ImageController::class, "showForm"])->name('form');
        Route::post('/upload', [ImageController::class, "upload"])->name('upload');
    }
);