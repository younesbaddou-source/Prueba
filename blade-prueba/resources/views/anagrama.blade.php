@extends('layouts.app')
@section('content')

<h1>EXAMEN: El Joc dels Anagrames</h1>

<div id="formulari">
    <label for="entrada">Introdueix les paraules (base + candidates + F):</label><br>
    <input type="text" id="entrada" placeholder="Ex: roma amor ramo mora ropa F">
    <button id="processar">Processar</button>
</div>

<div id="control">

</div>
@vite('resources/js/anagrama.js')

@endsection
