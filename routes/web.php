<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $vistas = view('layout/header').
    view('layout/menu').
    view('inicio').
    view('layout/footer');

    return $vistas;
});
Route::get('/caracteristcas', function () {

    $vistas1 = view('layout/header').
    view('layout/menu').
    view('caracteristcas').
    view('layout/footer');

    return $vistas1;
});
Route::get('/tipos', function () {

    $vistas1 = view('layout/header').
    view('layout/menu').
    view('tipos').
    view('layout/footer');

    return $vistas1;
});
Route::get('/hechosReales', function () {

    $vistas1 = view('layout/header').
    view('layout/menu').
    view('hechosReales').
    view('layout/footer');

    return $vistas1;
});
Route::get('/policias', function () {

    $vistas1 = view('layout/header').
    view('layout/menu').
    view('policias').
    view('layout/footer');

    return $vistas1;
});

