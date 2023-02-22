<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/games', [CategoryController::class, 'games']);
    Route::get('/songs', [CategoryController::class, 'songs']);
    Route::get('/books', [CategoryController::class, 'books']);
   });

Route::get('/news/{page}',[NewsController::class, 'news']);

Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan_industri']);
   });

Route::get('/about-us',[AboutUsController::class, 'about_us']);

Route::resource('/contact-us', ContactUsController::class)->only(['index' , 'store']);
