@extends('layouts.main')

@section('title')
    <title>I prodotti | La Molisana</title>
@endsection

@section('content') 
<div class="main-section">
    <div class="container">
        @include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'])
        @include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'])
        @include('partials.cards', ['cards' => $cortissime, 'title' => 'LE LUNGHISSIME'])
    </div>
</div>
@endsection