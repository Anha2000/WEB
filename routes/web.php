<?php

use Illuminate\Support\Facades\Route;

Route::get('/{index}','App\Http\Controllers\CommentController@PostIndex')->name('index');

//Route::get('/{category}', 'App\Http\Controllers\CommentController@PostIndex')->name('category');
Route::get('/category/{id}', 'App\Http\Controllers\CommentController@PostCategory')->name('category_id');

Route::get('/blog-single/{id}', 'App\Http\Controllers\CommentController@PostSingle')->name('blog-single');



Route::post('/blog-single/submit/{id}', 'App\Http\Controllers\CommentController@submit')->name('comment');

Route::get('index/search', 'App\Http\Controllers\CommentController@search')->name('search');

  

Route::middleware(['role:admin'])->prefix('admin/admin_panel')->group(function () {
	 Route::get('/','App\Http\Controllers\Admin\homeController@index' )->name('homeAdmin');
	 Route::resource('/category',App\Http\Controllers\Admin\CategoryController::class);
	 Route::resource('/article',App\Http\Controllers\Admin\ArticleController::class);


});
Auth::routes();
Route::get('/calendar/advent', 'App\Http\Controllers\CommentController@calendar')->name('calendar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



