<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesTransactionController;

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
Route::get('/', [SalesTransactionController::class, 'dashboard'])->name('dashboard');

Route::get('/index', [ProductController::class,'index'])->name('index');
Route::view('/newproduct' ,'product.addproduct');
Route::post('/add',[ProductController::class, 'addproduct'])->name('product.add');
Route::get('/delete/{id}',[ProductController::class, 'deleteproduct'])->name('product.delete');
Route::get('/view/{id}',[ProductController::class, 'viewproduct'])->name('product.view');
Route::get('/edit/{id}',[ProductController::class, 'editproduct'])->name('product.edit');
Route::post('/updatedata/{id}',[ProductController::class, 'updateproduct'])->name('product.update');



Route::get('/sale', [SalesTransactionController::class, 'index'])->name('sales.index');
Route::get('/create', [SalesTransactionController::class, 'create'])->name('sales.create');
Route::post('/store', [SalesTransactionController::class, 'store'])->name('sales.store');