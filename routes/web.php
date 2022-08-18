<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action:'App\Http\Controllers\MainController@home');

Route::get('/about', action:'App\Http\Controllers\MainController@about');


Route::get('/contact', action:'App\Http\Controllers\MainController@contact');
