<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginalogin');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/paginainicial', function () {
    return view('paginainicial');
})->name('home');

Route::get('/paginacardapio', function () {
    return view('paginacardapio');
})->name('home');

Route::get('/paginacadastropets', function () {
    return view('paginacadastropets');
})->name('home');





