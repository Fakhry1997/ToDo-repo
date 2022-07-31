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
use App\Http\Controllers\UserController;


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TaskController@index')->name('tasks.home');
Route::get('/tasks/index','TaskController@index')->name('tasks.get.index');
Route::get('tasks/create','TaskController@create')->name('tasks.get.create');
Route::patch('tasks/{id}','TaskController@update')->name('tasks.patch.update');

Route::post('/tasks/index', 'TaskController@store')->name('tasks.post.create');
Route::delete('tasks/{id}','TaskController@delete')->name('tasks.delete.delete');

#Regestration
Route::get('/register',[UserController::class,'create']);
