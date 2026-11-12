@extends('layouts.app')
    @section('title', 'Mini TaskFlow')
    @section('content')
    <header class="header">
        <h1>Mini TaskFlow</h1>
    </header>

    <main>
        <div class="tarea">
            <h2>Estudiar SCSS</h2>
            <p>Entender variables y anidamiento</p>
            <svg class="icon icon--check"><use xlink:href="#icon-check"></use></svg>
            <span class="fecha">13/11/2026</span>
        </div>

        <div class="tarea">
            <h2>Estudiar JS</h2>
            <p>Entender split, if y bucles</p>
            <svg class="icon icon--x"><use xlink:href="#icon-x"></use></svg>
            <span class="fecha">17/11/2026</span>
        </div>
        <div class="aviso">
            <h2>Estudiar JS</h2>
            <p>Entender split, if y bucles</p>
            <svg class="icon icon--mas"><use xlink:href="#icon-mas"></use></svg>
            <span class="fecha">17/11/2026</span>
        </div>
        <div class="tarea margen-3">
            <h2>Estudiar JS</h2>
            <p>Entender split, if y bucles</p>
            <span class="fecha">17/11/2026</span>
        </div>
        <div class="tarea msg-ok">
            <h2>Estudiar JS</h2>
            <p>Entender split, if y bucles</p>
            <span class="fecha">17/11/2026</span>
        </div>
        <div class="tarea msg-aviso">
            <h2>Estudiar JS</h2>
            <p>Entender split, if y bucles</p>
            <span class="fecha">17/11/2026</span>
        </div>
        <div class="tarea msg-error">
            <h2>Estudiar JS</h2>
            <p>Entender split, if y bucles</p>
            <span class="fecha">17/11/2026</span>
        </div>
    </main>
    @endsection

