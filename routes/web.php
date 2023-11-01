<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminPostCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
Route::prefix('/admin')->group(function () {
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('/', [AdminPostCategoryController::class, 'index'])->name('index');
        Route::get('/create', [AdminPostCategoryController::class, 'create'])->name('create');
        Route::post('/store', [AdminPostCategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminPostCategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminPostCategoryController::class, 'update'])->name('update');
        Route::get('/destroy/{id}', [AdminPostCategoryController::class, 'destroy'])->name('destroy');
    });
});
