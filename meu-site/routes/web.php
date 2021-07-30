<?php

use App\Http\Controllers\VolumesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbunsController;

Route::get('/pages', [AlbunsController::class,'index'])->name('listar_albuns');
Route::get('/pages/albuns', [AlbunsController::class,'create'])->name('form_criar_album');
Route::post('/pages/albuns', [AlbunsController::class,'store']);
Route::delete('/pages/{id}', [AlbunsController::class,'destroy']);

Route::get('/pages/albuns/{albumId}/volumes', [VolumesController::class, 'index']);
