<?php

use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [ClientController::class, 'index']);
Route::post('/users', [ClientController::class, 'store']);

Route::get('/clients', [CompanyController::class, 'index']);
Route::get('/clients/{company}', [CompanyController::class, 'show']);

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{service}', [ServiceController::class, 'show']);
