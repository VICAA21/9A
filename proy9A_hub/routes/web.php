<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('primera', function () {
    return view('uno');
});

Route::get('segunda', function () {
    return view('dos');
});

Route::get('tercera', function () {
    return view('tres');
});
