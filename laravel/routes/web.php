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

Route::get('/', [
    'uses' => 'App\Http\Controllers\AirsoftController@index',
    'as' => 'index'
]);


route::get('/add', [
    'uses' => 'App\Http\Controllers\AirsoftController@getaddpage',
    'as'=> 'addName'
]);

Route::post('/add', [
    'uses' => 'App\Http\Controllers\AirsoftController@store',
    'as' => 'postName',
]);

route::get('/delete/{id}', [
    'uses' => 'App\Http\Controllers\AirsoftController@destroy',
    'as'=> 'deletepage'
]);
route::get('/update/{id}', [
    'uses' => 'App\Http\Controllers\AirsoftController@getIDForUpdate',
    'as'=> 'updatepage'
]);

route::post('/update', [
    'uses' => 'App\Http\Controllers\AirsoftController@update',
    'as'=> 'update'
]);