<?php

$data = config('site-database');

$lunghe = [];
$corte = [];
$cortissime = [];

foreach ( $data as $key => $cards ) {

    $cards['id'] = $key;

    if ( $cards['tipo'] === 'lunga' ) {
        $lunghe[] = $cards;
    } elseif ( $cards['tipo'] === 'corta' ) {
        $corte[] = $cards;
    } elseif ( $cards['tipo'] === 'cortissima' ) {
        $cortissime[] = $cards;
    };
};

// dd($lunghe, $corte, $cortissime);