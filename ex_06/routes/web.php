<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'caneController@index')->name('home');
Route::get('/cane/{id}', 'caneController@show')->name('cagnetto');
