<?php

use Illuminate\Support\Facades\Route;

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
//Practicum 1
//Nomer 2 
Route::get('/', function () {
   echo "Selamat Datang";
});
//Nomer 3
Route::get('/about', function () {
    echo "Hello My Name Rajendra Rakha";
 });
Route::get('/article/{id}', function ($id) {
    echo ("Ini Merupakan Halaman Article dengan id ".$id);

 Route::get('/article/{id}', function ($id) {
    echo ("Ini Merupakan Halaman Article dengan id ".$id);
});
});

