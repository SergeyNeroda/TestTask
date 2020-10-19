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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => true,
    'verify' => false,
    'reset' => false
]);

Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['auth']], function () {

        //User Routes
        
        Route::get('/account', ['uses'=>'UserController@details', 'as'=>'users.details']);
        Route::get('/account/edit', ['uses'=>'UserController@edit', 'as'=>'users.edit']);
        Route::post('/account/edit', ['uses'=>'UserController@update', 'as'=>'users.update']);
        Route::get('/account/password', ['uses'=>'UserController@editPassword', 'as'=>'users.edit_password']);
        Route::post('/account/password', ['uses'=>'UserController@updatePassword', 'as'=>'users.update_password']);

    });

    
});