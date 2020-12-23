<?php

$data = config('site-database');

$lunghe = [];
$corte = [];
$cortissime = [];

foreach ($data as $key => $tipo) {

    $tipo['id'] = $key; 
    // $data = $tipo;

    if ( $tipo['tipo'] === 'lunga' ) {
        $lunghe[] = $tipo;
    } elseif ($tipo['tipo'] === 'corta' ) {
        $corte[] = $tipo;
    } elseif ($tipo['tipo'] === 'cortissima' ) {
        $cortissime[] = $tipo;
    }

}
// dd($lunghe, $corte, $cortissime);