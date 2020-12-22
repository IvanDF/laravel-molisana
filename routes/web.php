<?php

use Illuminate\Support\Facades\Route;

// PASTAS DATABASE

// dd($data);

Route::get('/', function () {
    include 'database/database.php';

    return view('welcome', [ 'cards' => $data ]);
});
