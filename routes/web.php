<?php
Route::resource('boxes', 'BoxesController')->middleware('auth');
Route::resource('pages', 'PagesController')->middleware('auth');
Route::resource('pages/{page}/sections', 'SectionsController')->middleware('auth');
Route::get('/', 'PagesController@show');
// Route::get('/{slug}', 'PagesController@show');
Route::get('boxes/{slug}', 'PagesController@show')->middleware('auth');
Route::post('pages/{page}/sections/create', 'SectionsController@create')->middleware('auth');

Route::get('files', 'FilesController@index')->middleware('auth');
Route::post('files/css', "FilesController@css")->middleware('auth');
Route::post('files/js', "FilesController@js")->middleware('auth');
Route::post('files/media', "FilesController@media")->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings/edit', 'SettingsController@edit');
Route::post('/settings', 'SettingsController@update');