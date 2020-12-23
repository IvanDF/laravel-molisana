<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    include 'database/database.php';

    return view('products', compact('lunghe', 'corte', 'cortissime'));
})->name('products');

// PRODUCT DETAIL
Route::get('/product-detail/{id}', function ($id) {
    // dump($id);

    include 'database/database.php';

    $data['id'] = $id;
    $length = count($data) - 1;

    $product = $data[$id];

    return view('product-detail' , compact('product', 'length', 'id'));
})->name('product');

// HOME
Route::get('/home', function () {

    return view('home');
})->name('home');

// NEWS
Route::get('/news', function () {

    return view('news');
})->name('news');
