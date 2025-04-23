<?php

use App\Http\Controllers\API\BlogAnswerController;
use App\Http\Controllers\API\BlogCategoryController;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\BlogQuestionController;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\EmployerController;
use App\Http\Controllers\API\NevController;
use App\Http\Controllers\API\NewCategoryController;
use App\Http\Controllers\API\PartnerController;
use App\Http\Controllers\API\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [ClientController::class, 'index']);
Route::post('/users', [ClientController::class, 'store']);

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/{id}', [ClientController::class, 'show']);

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{service}', [ServiceController::class, 'show']);

Route::get('/news/{id}',[NevController::class, 'show']);
Route::get('/news',[NevController::class, 'index']);

Route::get('/news-categories/{id}', [NewCategoryController::class, 'show']);
Route::get('/news-categories', [NewCategoryController::class, 'index']);

Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/blog', [BlogController::class, 'index']);

Route::get('blog-category/{id}', [BlogCategoryController::class, 'show']);
Route::get('blog-category', [BlogCategoryController::class, 'index']);

Route::get('blog-answer/{id}', [BlogAnswerController::class, 'show']);
Route::get('blog-answer', [BlogAnswerController::class, 'index']);

Route::get('blog-question/{id}', [BlogQuestionController::class, 'show']);
Route::get('blog-question', [BlogQuestionController::class, 'index']);

Route::get('partners/{id}', [PartnerController::class, 'show']);
Route::get('partners', [PartnerController::class, 'index']);

Route::get('/employers/{id}', [EmployerController::class, 'show']);
Route::get('/employers', [EmployerController::class, 'index']);











