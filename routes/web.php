<?php
Route::resource('pages', 'PagesController');
Route::resource('pages/{page}/sections', 'SectionsController');