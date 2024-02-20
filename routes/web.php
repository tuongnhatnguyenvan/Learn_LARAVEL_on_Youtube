<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
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
    $html = '<h1>Nhat hoc Laravel đe giai cuu the gioi</h1>';
    return $html;
});
// Route::get('/unicode', function () {
//     return view('form');
//     // return "Đây là trang unicode dung post";
// });

// Route::post('/unicode', function () {
//     return "Đây là trang home dung post";
// });

// Route::put('/unicode', function () {
//     return "Đây là trang home dung put";
// });

// Route::delete('/unicode', function () {
//     return "Đây là trang home dung delete";
// });

// Route::patch('/unicode', function () {
//     return "Đây là trang home dung PATCH";
// });

// Route::match(['get', 'post'], '/unicode', function () {
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('/unicode', function (Request $_request) {
//     return $_request->method();
//     // return $_SERVER['REQUEST_METHOD'];
// });

// Route::get('show-form', function(){
//     return view('form');
// });

// Route::redirect('unicode','https://www.youtube.com');

// Route::redirect('unicode','show-form',301);

// Route::view('show-form','form');

Route::prefix('admin')->group(function () {
    Route::get('/unicode', function () {
        return view('form');
    });

    Route::get('show-form', function () {
        return view('form');
    });
    Route::prefix('product')->group(function () {
        Route::get('/', function () {
            return 'danh sach san pham';
        });
        Route::get('/add', function () {
            return 'them san pham';
        });
        Route::get('edit', function () {
            return 'sua san pham';
        });
        Route::get('delete', function () {
            return 'xoa san pham';
        });
    });
});
