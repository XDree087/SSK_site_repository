<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('static.login_page');
});

Route::get('/home', function () {
    return view('static.home_page');
});
