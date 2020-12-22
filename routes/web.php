<?php

use Illuminate\Support\Facades\Route;

// PASTAS DATABASE

Route::get('/', function () {
    include 'database/database.php';
    // dd($lunghe);

    return view('products', [ 'lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime ]);
});

Route::get('/home', function () {

    return view('home');
});

Route::get('/news', function () {

    return view('news');
});
