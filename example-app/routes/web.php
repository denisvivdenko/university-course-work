<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/product', function () {
    return view('product');
});


Route::get('/index', [ProductController::class, 'index']);

Route::get('/catalog', [ProductController::class, 'catalog']);
Route::get('/product/{id}', [ProductController::class, 'product']);

