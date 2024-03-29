<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/ADD', [ProductController::class, 'newProduct'])->name('product.new');
Route::post('/ADD', [ProductController::class, 'saveProduct'])->name('product.save');
Route::get('/Browse', [ProductController::class, 'listProducts'])->name('product.list');
