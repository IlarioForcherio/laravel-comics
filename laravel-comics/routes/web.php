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




Route::get('/', function () {


    return view('home');
})->name('home');



Route::get('/comics', function () {
    
  $comics = config('comics');
    
  return view('comics',compact('comics'));
})->name('comics');


Route::get('/comics/{key}', function ($key) {
    
    $comics = config('comics');

    $prodotto_singolo = $comics[$key];
      
    return view('show',compact('prodotto_singolo'));
  })->name('show_comic');

