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

Route::match(['get'],'/',['uses'=>'IndexController@index']);
Route::match(['get', 'post'],'/create',['uses'=>'IndexController@create']);
Route::match(['get', 'post'],'/update/{id}',['uses'=>'IndexController@update']);
Route::match(['get'],'/delete/{id}',['uses'=>'IndexController@delete']);

/*Route::get('/', function () {
    return view('welcome');
});*/
