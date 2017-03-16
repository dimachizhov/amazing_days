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

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'group:administrators'], function () {
    Route::get('/','AdminController@index');

    Route::group(['prefix' => 'articles'], function () {
        Route::get('/','AdminController@indexArticles');
        Route::get('create', 'ArticleController@create');
        Route::get('{article}/edit', 'ArticleController@edit');
    });
});

Route::get('/', 'HomeController@index');
Route::get('articles', 'ArticleController@index');
Route::get('articles/{articles}', 'ArticleController@show');