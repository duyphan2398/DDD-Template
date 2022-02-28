<?php

use App\Domain\Posts\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix(basename(__FILE__, '.php'))->group(function () {

    // Routes
    Route::controller(PostController::class)->group(function () {
        Route::get('', 'index');
        Route::get('{post}', 'show');
    });
});
