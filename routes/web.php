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
Route::get('/answer','QuestionsController@answer')->name('answer');
Route::resource('tests','TestsController');
Route::resource('question','QuestionsController');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('tests','TestsController');
    Route::resource('question','QuestionsController');
});