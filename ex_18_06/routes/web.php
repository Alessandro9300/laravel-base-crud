<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ominiController@index') -> name('home');

Route::get('/omo/{id}', 'ominiController@show') -> name('show');

Route::get('/form_update/{id}', 'ominiController@form') -> name('form_update');

Route::post('/store_update/{id}', 'ominiController@update_store') -> name('update_store');

Route::get('/form_create', 'ominiController@create_form') -> name('create_form');

Route::post('/store_create', 'ominiController@create_store') -> name('create_store');
