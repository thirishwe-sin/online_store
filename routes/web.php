<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\OrderController;

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
Route::prefix('admin')->group(function(){
    Route::resource('category', CategoryController::class);
});

Route::prefix('admin')->group(function(){
    Route::resource('item', ItemController::class);
});

Route::get('/', [PageController::class, 'landing']);
Route::get('/buy/now/check/out/{item_id}', [OrderController::class, 'buyNowCheckOut']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
