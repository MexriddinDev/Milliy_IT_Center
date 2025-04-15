<?php

use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/clients', [CompanyController::class, 'index']);
Route::get('/clients/{company}', [CompanyController::class, 'show']);
Route::get('/services', [ServiceController::class, 'index']);
