<?php

use Illuminate\Support\Facades\Route;


Route::post('/projects', 'ProjectController@store')->name('project.store');
Route::get('/projects/{project}', 'ProjectController@show')->name('project.show');

Route::get('/{company}', 'DashboardController@index');

