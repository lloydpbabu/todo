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
    return view('welcome ');});

    Route::get('/todo', function () {
    return view('todo');
});
Route::get('/todo/save','todoController@save');
Route::get('/view','todoController@view');
Route::get('/insert','todoController@save');
Route::get('/delete/{id}','todoController@delete');
Route::get('/edit/{id}','todoController@edit');
Route::post('/update','todoController@update');