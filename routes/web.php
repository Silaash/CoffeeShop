<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CarouselController;
use App\Http\Controllers\Frontend\HomeControler;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeControler::class,'home'])->name('home');

Route::resource('carousel', CarouselController::class);
Route::get('dashboard',[AdminController::class,'index']);