<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('taskflow');
});
Route::get('/examen/examen', function () {
    return view('examen.examen');
});
Route::get('/dom', function () {
    return view('dom');
});
Route::get('/anagrama', function () {
    return view('anagrama');
});