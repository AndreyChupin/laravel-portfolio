<?php

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
    Route::get('/hub/{hub}/{rating?}', "HomeController@index")->where('rating', '(all|top10|top25|top50|top100)')->name('posts');
    Route::get('/users/{nickname}', function ($nickname) {
        return '<b>User:</b> ' . $nickname;
    })->name('users');
    Route::get('/post/{id}', "PostController@index")->name('post');
    Route::post('/post/update', "PostController@update")->name('post_update');
    Route::get('/post/{id}/{slug}', "PostController@index")->name('post_slug');
});

Route::get('/webpack', function () {
    return view('webpack_test');
});

Route::get('robots.txt', 'RobotsTxtController');
