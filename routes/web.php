<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/',[ProductsController::class,'index'])->name('products.index');
Route::get('products/create',[ProductsController::class,'create'])->name('products.create');
Route::post('products/store',[ProductsController::class,'store'])->name('products.store');
Route::get('products/{id}/edit',[ProductsController::class,'edit']);
Route::put('products/{id}/update',[ProductsController::class,'update']);
Route::get('products/{id}/delete',[ProductsController::class,'delete']);


