<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('components.login_page');
});

Route::get('/home', function () {
    return view('components.home_page');
});
