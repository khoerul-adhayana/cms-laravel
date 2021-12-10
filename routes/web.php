<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

/*ROUTE HOME*/
Route::get('/',[HomeController::class ,'index']);
Route::get('/products',[ProductController::class ,'index'])->name('products');

/*ROUTE EXPORT IMPORT*/
Route::get('/products/export_excel',[ProductController::class,'export_excel']);
Route::post('/products/import_excel',[ProductController::class,'import_excel'])->name('imports-products');

/*ROUTE PRODUCTZ*/
Route::get('/products-create',[ProductController::class, 'create']);
Route::post('/products-create',[ProductController::class,'store'])->name('products-create');
Route::get('/products-edit/{product}',[ProductController::class,'edit']);
Route::post('/products-edit/{product}',[ProductController::class,'update']);
Route::delete('/products-destroy/{product}',[ProductController::class,'destroy']);
Route::get('/products-detail/{product}',[ProductController::class,'show']);

/*ROUTE SEARCH*/
Route::get('/search',[ProductController::class,'search']);

/*ROUTE CATEGORY*/
Route::get('/categories',[CategoryController::class, 'index'])->name('categories');
Route::get('/categories-create',[CategoryController::class, 'create']);
Route::post('/categories-create',[CategoryController::class, 'store'])->name('categories-create');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



