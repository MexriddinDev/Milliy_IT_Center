<?php


use App\Http\Controllers\API\Admin\BlogController;
use App\Http\Controllers\API\Admin\BlogCategoryController;
use App\Http\Controllers\API\Admin\NevController;
use App\Http\Controllers\API\Admin\NewCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/admin')->group(function () {

    Route::apiResource('blog_category', BlogCategoryController::class);
    Route::apiResource('blog', BlogController::class);
    Route::apiResource('news-categories', NewCategoryController::class);
    Route::apiResource('news', NevController::class);
});
