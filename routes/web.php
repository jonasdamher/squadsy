<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home'])->name('home');

Route::prefix('/dashboard')->group(function () {

    Route::prefix('/articles')->group(function () {
        Route::get('/', [ArticlesController::class, 'index'])->name('articleTable');
        Route::get('/new', [ArticlesController::class, 'create']);
    });

    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('categoryTable');
        Route::get('/new', [CategoriesController::class, 'create']);
    });
});
