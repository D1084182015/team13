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
Route::get('banana', [ProductsController::class, 'banana'])->name('products.banana');
Route::get('apple', [ProductsController::class, 'apple'])->name('products.apple');
Route::get('sakyamuni', [ProductsController::class, 'sakyamuni'])->name('products.sakyamuni');
Route::get('kyohogrape', [ProductsController::class, 'kyohogrape'])->name('products.kyohogrape');
Route::get('north', [MarketsController::class, 'north'])->name('markets.north');
Route::get('south', [MarketsController::class, 'south'])->name('markets.south');
Route::get('middle', [MarketsController::class, 'middle'])->name('markets.middle');
Route::get('east', [MarketsController::class, 'east'])->name('markets.east');
Route::resource("products",ProductsController::class);
Route::resource("markets",MarketsController::class);
