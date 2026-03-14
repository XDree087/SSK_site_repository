<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('static.login_page');
});

Route::get('/home', function () {
    return view('static.home_page');
});

Route::get('/applications', function() {
    return view('static.applications_page');
});

Route::get('/account', function() {
    return view('static.account_page');
});

Route::get('/account/statistic', function() {
    return view('static.statistic_page');
});

Route::get('/account/settings', function() {
    return view('static.settings_page');
});

Route::get('/account/support', function() {
    return view('static.support_page');
});
