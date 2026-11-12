<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('taskflow');
});
Route::get('/examen', function () {
    return view('examen.examen');
});
