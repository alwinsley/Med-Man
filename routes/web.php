<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/leonardo', function () {
    return view('layouts.leonardo');
});

Route::get('/junior', function () {
    return view('layouts.junior');
});

Route::get('/mia', function () {
    return view('layouts.mia');
});

Route::get('/auscultation', function () {
    return view('layouts.auscultation');
});

Route::get('/lapvision', function () {
    return view('layouts.lapvision');
});

Route::get('/angiovision', function () {
    return view('layouts.angiovision');
});

Route::get('/hystvision', function () {
    return view('layouts.hystvision');
});

Route::get('/endovision', function () {
    return view('layouts.endovision');
});

Route::get('/products', function () {
    return view('layouts.products');
});


Route::get('/manuals', function () {
    return view('layouts.manuals');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});