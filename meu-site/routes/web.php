<?php

Route::get('/home', 'HomeController@home');

Route::get('/home/albuns', 'HomeController@albuns');

Route::post('/home/albuns', 'HomeController@store');
