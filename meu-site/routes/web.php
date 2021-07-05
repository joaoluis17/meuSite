<?php

Route::get('/home', function () {
    echo "Bem-Vindo ao meu Lugar!";
});

Route::get('/sobre-mim', function () {
    echo "Oi, eu sou o John!";
});

Route::get('/links', 'LinksController@listarLinks');
