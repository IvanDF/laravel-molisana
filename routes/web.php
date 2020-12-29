<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function () {
    return view('home');
})-> name('home');

// PRODUCTS
Route::get('/products', function () {

    include 'database/database.php';

    return view('products', compact('lunghe', 'corte', 'cortissime'));

})-> name('products');

// PRODUCT DETAIL
Route::get('/product-detail/{id}', function ($id) {

    // dump($id);

    include 'database/database.php';

    $data['id'] = $id;
    $length = count($data) - 1;

    $product = $data[$id];

    return view('product-detail', compact('product', 'id', 'length'));

}) -> name('product');

// NEWS
Route::get('/news', function () {
    return view('news');
})-> name('news');
