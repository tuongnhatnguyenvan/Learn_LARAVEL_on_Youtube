<?php

use App\Http\Middleware\CheckPermission;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/tin-tuc','HomeController@getNews')->name('news');
Route::get('/danh-muc',[HomeController::class,'getCategories']);

Route::prefix('admin')->group(function () {
    Route::get('/unicode/{slug?}-{id?}.html', function ($slug=null, $id=null) {
        $content = 'Đây là dung prefix voi tham so ';
        $content .= 'id = ' . $id .'<br>';
        $content .= 'slug = '. $slug ;
        return $content;
    })->where('id', '\d+')->where('slug', '.+')->name('admin.unicode');

    Route::get('show-form', function () {
        return view('form');
    })->name('admin.show-form');
    Route::prefix('product')->middleware('checkpermission')->group(function () {
        Route::get('/', function () {
            return 'danh sach san pham';
        });
        Route::get('/add', function () {
            return 'them san pham';
        })->name('admin.product.add');
        Route::get('edit', function () {
            return 'sua san pham';
        });
        Route::get('delete', function () {
            return 'xoa san pham';
        });
    });
});
