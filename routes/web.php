<?php

use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
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


Route::get('/', function () {
    return '<h1>Trang chu Oke</h1>';
})->name('home');
//client route
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory'])->name('categories.update');
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    Route::post('/add', [CategoriesController::class, 'handleAddCategory'])->name('categories.handleAdd');
    Route::get('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});

Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/',[ DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});
