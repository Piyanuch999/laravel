<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', [ProductController::class,'index']);
Route::get('/product/remove/{id}', [ProductController::class,'remove']);

Route::get('/product/search',[ProductController::class,'search']);
Route::post('/product/search',[ProductController::class,'search']);
Route::get('/product/edit/{id?}', [ProductController::class, 'edit']);
Route::post('/product/update', [ProductController::class, 'update']);

Route::post('/product/insert', [ProductController::class, 'insert']);
Route::get('/home', [HomeController::class, 'index']);