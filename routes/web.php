<?php

use Illuminate\Support\Facades\Route;

Route::get('/{index}','App\Http\Controllers\CommentController@PostIndex')->name('index');

//Route::get('/{category}', 'App\Http\Controllers\CommentController@PostIndex')->name('category');
Route::get('/category/{id}', 'App\Http\Controllers\CommentController@PostCategory')->name('category_id');

Route::get('/blog-single/{id}', 'App\Http\Controllers\CommentController@PostSingle')->name('blog-single');



Route::post('/blog-single/submit/{id}', 'App\Http\Controllers\CommentController@submit')->name('comment');

Route::get('index/search', 'App\Http\Controllers\CommentController@search')->name('search');

  

Route::group(['middleware' => ['role:admin']], function () {
	 Route::get('/uuu/1',function () {return view ('uuu');});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



