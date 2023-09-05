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
Route::get('order',[DishesController::class,'order'])->name('kitchen.order');
Route::get('order/{order}/approve',[DishesController::class,'approve']);
Route::get('order/{order}/cancel',[DishesController::class,'cancel']);
Route::get('order/{order}/ready',[DishesController::class,'ready']);
Route::get('order/{order}/serve',[DishesController::class,'serve']);
