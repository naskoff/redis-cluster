<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \Illuminate\Support\Facades\Cache::put('test', '123');
    return view('welcome');
});
