<?php
Route::resource('boxes', 'BoxesController');
Route::resource('pages', 'PagesController');
Route::resource('pages/{page}/sections', 'SectionsController');
Route::get('/', 'PagesController@show');
// Route::get('/{slug}', 'PagesController@show');
Route::get('boxes/{slug}', 'PagesController@show');
Route::post('pages/{page}/sections/create', 'SectionsController@create');

Route::get('files', 'FilesController@index');
Route::post('files/css', "FilesController@css");
Route::post('files/js', "FilesController@js");
Route::post('files/media', "FilesController@media");