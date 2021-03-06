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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/upload','UploadFileController@uploadForm')->name('upload');
Route::post('/upload','UploadFileController@uploadSubmit');
Route::get('/roles','UserRolesController@index')->name('roles');
Route::post('/roles','UserRolesController@postAssignRoles');

