<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::prefix('/ru')->name('ru.')->group(function () {
    Route::get('/hub/{hub}/{rating?}', [HomeController::class, 'index'])->where('rating', '(all|top10|top25|top50|top100)')->name('posts');
    Route::get('/users/{nickname}', function ($nickname) {
        return '<b>User:</b> ' . $nickname;
    })->name('users');
    Route::get('/post/{id}', [PostController::class,'index'])->name('post');
    Route::post('/post/update', [PostController::class, 'update'])->name('post_update');
    Route::get('/post/{id}/{slug}', [PostController::class,'index'])->name('post_slug');
});
