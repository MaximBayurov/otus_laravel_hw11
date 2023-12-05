<?php

use \Illuminate\Support\Facades\Route;
use Mbayurov\OtusLaravelHw11\Controllers\ImageController;
use Mbayurov\OtusLaravelHw11\Controllers\RenderController;

if (!config('hw11.enabled')) {
    return;
}

Route::group(
    ['prefix' => config('hw11.prefix'), 'as' => 'hw11.'],
    function () {
        Route::get('/form', [ImageController::class, "showForm"])->name('form');
        Route::post('/upload', [ImageController::class, "upload"])->name('upload');
        Route::get('/render/text', [RenderController::class, "renderText"])->name('render.text');
        Route::post('/render/html', [RenderController::class, "renderHtml"])->name('render.html');
    }
);