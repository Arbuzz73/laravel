<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/journalist', function () {
    return view('journalist');
});

Route::get('/admin', function () {
    return view('admin');
});