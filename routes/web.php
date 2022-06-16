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
    return view('welcome');
});
Route::get('/teste/{nome}/{endereco}', function ($nome, $endereco) {
    echo "olá $nome, você mora em $endereco <br>";
});


Route::prefix('/admin')->group(function () {
    Route::get('users/{id}', function ($id) {
        echo "$id";
    });
    Route::get('usera/{id}', function ($id) {
        echo "$id";
    });
});