<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbunsController;

Route::get('/pages', [AlbunsController::class,'index'])->name('listar_albuns');
Route::get('/pages/albuns', [AlbunsController::class,'create'])->name('form_criar_album');
Route::post('/pages/albuns', [AlbunsController::class,'store']);
Route::delete('/albuns/{id}', [AlbunsController::class,'destroy']);
