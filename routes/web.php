<?php

use App\Http\Controllers\MarketsController;
use App\Http\Controllers\ProductsController;
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

Route::get('products/senior', [ProductsController::class, 'senior'])->name('products.senior');
Route::get('products/banana', [ProductsController::class, 'banana'])->name('products.banana');
Route::get('products/apple', [ProductsController::class, 'apple'])->name('products.apple');
Route::get('products/sakyamuni', [ProductsController::class, 'sakyamuni'])->name('products.sakyamuni');
Route::get('products/kyohogrape', [ProductsController::class, 'kyohogrape'])->name('products.kyohogrape');
Route::get('markets/north', [MarketsController::class, 'north'])->name('markets.north');
Route::get('markets/south', [MarketsController::class, 'south'])->name('markets.south');
Route::get('markets/middle', [MarketsController::class, 'middle'])->name('markets.middle');
Route::get('markets/east', [MarketsController::class, 'east'])->name('markets.east');
Route::resource("products",ProductsController::class);
Route::resource("markets",MarketsController::class);
