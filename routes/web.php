<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('course');
});

Route::get('/first', function () {
    return view('task');
});
