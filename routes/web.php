<?php

use App\Http\Controllers\ArticulosPoliticos;
use App\Http\Controllers\Caracteristicas;
use App\Http\Controllers\Historias;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Movimiento;
use Illuminate\Support\Facades\Route;




Route::get('/' ,HomeController::class);
Route::get('/caracteristcas' , [Caracteristicas::class, 'Caracteristicas']);
Route::get('/tipos' , [Movimiento::class, 'Movimiento']);
Route::get('/hechosReales' , [Historias::class, 'Historia']);
Route::get('/policias' , [ArticulosPoliticos::class, 'Articulos']);



