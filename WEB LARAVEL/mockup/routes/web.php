<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forget', function () {
    return view('forget');
});

Route::get('/password', function () {
    return view('password');
});


Route::get('/edicion', function () {
    return view('edicion');
});
