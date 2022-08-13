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
Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/hello/view', 'App\Http\Controllers\HelloController@view');
Route::get('/hello/list', 'App\Http\Controllers\HelloController@list');
Route::get('/view/master', 'App\Http\Controllers\ViewController@master');
Route::get('/record/hasmany', 'App\Http\Controllers\RecordController@hasmany');
Route::get('/save/create', 'App\Http\Controllers\SaveController@create');
Route::post('/save/store', 'App\Http\Controllers\SaveController@store');
Route::get('/save/{id}/edit','App\Http\Controllers\SaveController@edit');
Route::patch('/save/{id}','App\Http\Controllers\SaveController@update');
Route::get('/save/{id}/show','App\Http\Controllers\SaveController@show');
Route::delete('/save/{id}','App\Http\Controllers\SaveController@destroy');