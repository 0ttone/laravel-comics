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
      $comics = config('comics'); //genera la variabile che richiama l array con config
    return view('home',[
          'comics' => $comics // ritorna la varibile utilizzabile
    ]);
})->name('homepage');// permette di richiamare la route nel template dal nome e non dal percorso

Route::get('/singleComic/{$id}', function ($id) { //id è una variabile che inviamo alla callback e ci permette di ciclare l interno 
     $comics = config('comics');

      return view('singleComic', [
            "id" => $id-1,
            'comics' => $comics
      ]);
  })->name('singleComic');

