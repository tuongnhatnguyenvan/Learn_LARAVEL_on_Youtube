<?php

use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth.admin');
//client route
Route::middleware('auth.admin')->prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory'])->name('categories.update');
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    Route::post('/add', [CategoriesController::class, 'handleAddCategory'])->name('categories.handleAdd');
    Route::get('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});

Route::get('/san-pham/{id}', [HomeController::class, 'getProductsDetail']);

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});
