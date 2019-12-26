<?php
Route::resource('boxes', 'BoxesController');
Route::resource('pages', 'PagesController');
Route::resource('pages/{page}/sections', 'SectionsController');
Route::get('/', 'PagesController@show');
Route::get('/{slug}', 'PagesController@show');
Route::get('boxes/{slug}', 'PagesController@show');