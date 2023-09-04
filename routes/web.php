<?php

use App\Http\Controllers\DishesController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/',[OrderController::class,'index'])->name('order.form');
Route::post('order_submit',[OrderController::class,'submit'])->name('order.submit');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

Route::resource('dish',DishesController::class);
