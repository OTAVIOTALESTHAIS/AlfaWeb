<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('alfa.lista2carro'); });
Route::get('/relatorios', function () {
    return view('alfa.relatorios');
});
