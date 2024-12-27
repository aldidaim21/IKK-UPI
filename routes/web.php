<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sarpras', function () {
    return view('UPA\sarpras');
});
