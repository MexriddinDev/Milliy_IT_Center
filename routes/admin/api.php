<?php


use App\Http\Controllers\API\Admin\BlogController;
use App\Http\Controllers\API\Admin\BlogCategoryController;
use App\Http\Controllers\API\Admin\NevController;
use App\Http\Controllers\API\Admin\NewCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/admin')->group(function () {

    Route::resource('blog_category', BlogCategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('news-categories', NewCategoryController::class);
    Route::resource('news', NevController::class);
});
