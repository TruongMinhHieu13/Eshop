<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Fontend\HomeController;
use App\Http\Controllers\Admin\ProductAdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/san-pham', [ProductAdminController::class, 'index']);
        Route::get('/them-san-pham', [ProductAdminController::class, 'add']);
        Route::post('/add-products', [ProductAdminController::class, 'store']);
    });
});
Route::any('/{page?}', function () {
    return View::make('admin.pages.404');
})->where('page', '.*');
