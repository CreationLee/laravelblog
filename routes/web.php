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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
    //默认跳转首页
    Route::get('/','IndexController@index');

    Route::get('adduser','UserController@createuser');

    Route::resource('article','ArticleController');

    Route::resource('article_categories','ArticleCategoriesController');

});
