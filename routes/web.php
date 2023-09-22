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

// Home Page
Route::get('/', function () {

  $data = [
    'nome' => 'Pasquale',
    'cognome' => 'Isabelli',
    'cards' => [
      [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png',
        'title' => 'Valerio Corrado',
        'role' => 'Developer',
      ], [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png',
        'title' => 'Simone Leone',
        'role' => 'CEO Founder',
      ], [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png',
        'title' => 'Andrea Filograna',
        'role' => 'Office Manager',
      ], [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png',
        'title' => 'Pietro Collura',
        'role' => 'Data Analist',
      ], [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png',
        'title' => 'Giulia Linza',
        'role' => 'Graphic Designer',
      ], [
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png',
        'title' => 'Riccardo Bono',
        'role' => 'Social Media Manager',
      ]
    ] 
  ];

  return view('home', $data);
});
// Prima pagina
Route::get('/prima_pagina', function () {

  return view('prima_pagina');
})->name('prima_pagina');

// Seconda pagina
Route::get('/seconda_pagina', function () {

  return view('seconda_pagina');
})->name('seconda_pagina');
