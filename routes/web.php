<?php

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

Auth::routes([
    'register' => true,
    'verify' => false,
    'reset' => false
]);

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['uses'=>'HomeController@index', 'as'=>'home.index']);
    Route::view('/news', 'news')->name('news');
    Route::view('/podcasts', 'podcasts')->name('podcasts');
    Route::view('/resources', 'resources')->name('resources');
    Route::view('/contact', 'contact')->name('contact');

    Route::group(['middleware' => ['auth']], function () {

        //User Routes
        
        Route::get('/account', ['uses'=>'UserController@details', 'as'=>'users.details']);
        Route::get('/account/edit', ['uses'=>'UserController@edit', 'as'=>'users.edit']);
        Route::get('/account/password', ['uses'=>'UserController@editPassword', 'as'=>'users.edit_password']);
        Route::put('/account/password-update/{id}', ['uses'=>'UserController@updatePassword', 'as'=>'users.update_password']);

        Route::patch('/account/update/{id}', ['uses'=>'UserController@update', 'as'=>'users.update']);
        // Route::get('/account/password', ['uses'=>'UserController@editPassword', 'as'=>'users.edit_password']);
        // Route::post('/account/password', ['uses'=>'UserController@updatePassword', 'as'=>'users.update_password']);

        //Articles
        Route::get('/articles/author', ['uses'=>'ArticleController@userArticles', 'as'=>'articles.author']);
        Route::get('/articles', ['uses'=>'ArticleController@index','as'=>'articles']);
        Route::get('/articles/create', ['uses'=>'ArticleController@create','as'=>'articles.create']);
        Route::post('/articles/store', ['uses'=>'ArticleController@store','as'=>'articles.store']);
        Route::get('/articles/edit/{id}', ['uses'=>'ArticleController@edit','as'=>'articles.edit']);
        Route::get('/articles/show/{id}', ['uses'=>'ArticleController@show','as'=>'articles.show']);
        Route::patch('/articles/update/{id}', ['uses'=>'ArticleController@update','as'=>'articles.update']);
        Route::delete('/articles/delete/{id}', ['uses'=>'ArticleController@destroy','as'=>'articles.destroy']);
        Route::get('/articles/softdeleted',['uses'=>'ArticleController@softDeleted','as'=>'articles.softdeleted']);
        Route::patch('/articles/restore/{id}',['uses'=>'ArticleController@restore','as'=>'articles.restore']);
        Route::delete('articles/permamentdelete/{id}',['uses'=>'ArticleController@permanentDelete','as'=>'articles.permamentdelete']);
    });
   
});