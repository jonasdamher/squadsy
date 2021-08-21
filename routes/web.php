<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ArticlesController::class, 'index']);

Route::prefix('/articles')->group( function () {
    Route::get('/', [ArticlesController::class, 'index']);
    Route::get('/new', [ArticlesController::class, 'create']);
});

Route::prefix('/categories')->group( function () {
    Route::get('/', [CategoriesController::class, 'index']);
    Route::get('/new', [CategoriesController::class, 'create']);
});
