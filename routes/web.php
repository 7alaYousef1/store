<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
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


//Dashboard Routs
Route::get('admin/products',[ProductController::class,'index']);
Route::get('admin/products/create',[ProductController::class, 'create']);
Route::post('admin/products/store',[ProductController::class, 'store']);
Route::get('admin/products/edit/{id}',[ProductController::class, 'edit']);
Route::get('admin/products/delete/{id}',[ProductController::class, 'destroy']);
Route::patch('admin/products/update/{id}',[ProductController::class, 'update']);


Route::get('admin/categories', [CategoryController::class, 'index']);
Route::get('admin/categories/create', [CategoryController::class, 'create']);
Route::post('admin/categories/store', [CategoryController::class, 'store']);
Route::get('admin/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::get('admin/categories/delete/{id}', [CategoryController::class, 'destroy']);
Route::patch('admin/categories/update/{id}', [CategoryController::class, 'update']);

//Front Page Routs
Route::get('/', [FrontController::class,'index']);