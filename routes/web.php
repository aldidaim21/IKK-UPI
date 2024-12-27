<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


// sarpras
Route::get('/sarpras', function () {
    return view('UPA/sarpras');
});
