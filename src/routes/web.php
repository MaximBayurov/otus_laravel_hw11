<?php

use \Illuminate\Support\Facades\Route;

if (!config('hw11.enabled')) {
    return;
}

Route::group(
    ['prefix' => config('hw11.prefix'), 'as' => 'hw11.'],
    function () {
        Route::get('/', function () {
            return 'hw 11';
        })->name('home');
    }
);