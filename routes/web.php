<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutUsController;
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
Route::get('/', [HomeController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/games', [CategoryController::class, 'games']);
    Route::get('/story', [CategoryController::class, 'songs']);
    Route::get('/books', [CategoryController::class, 'books']);
   });

Route::get('/news/{page}',[NewsController::class, 'news']);

Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan-industri']);
   });

Route::get('/about-us',[AboutUsController::class, 'about_us']);

Route::resource('/contact-us', ContactUsController::class)->only(['index' , 'store']);
