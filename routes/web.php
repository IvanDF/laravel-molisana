<?php

use Illuminate\Support\Facades\Route;

// PASTAS DATABASE

// dd($data);

Route::get('/', function () {
    include 'database/database.php';
    // dd($lunghe);

    return view('home', [ 'lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime ]);
});
