<?php

use App\Http\Controllers\ProfileController;
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
    $title= " Il mio Blog";
    return view('homepage', ['title'=> $title ]);
})->name('home');
Route::get('/articoli', function () {
    $articoli = [
        ['titolo'=>'Computer', 'descrizione'=>'Potenti PC per gaming da PCSpecialist', 'categoria'=>'Elettronica'],
        ['titolo'=>'Cuffie gaming', 'descrizione'=>'Assicurati il comfort ininterrotto che ti serve per giocare a lungo a livello competitivo, con le Razer BlackShark V2 HyperSpeed: le cuffie wireless ultra leggere per esport.', 'categoria'=>'Audio'],
        ['titolo'=>'SEDIE DA GAMING', 'descrizione'=>'La Iskur V2 è unica sedia da gaming al mondo progettata in modo ergonomico, con un sistema di supporto lombare adattivo e regolabile. Questo permette alla sedia di modellarsi e adattarsi alla forma di ogni gamer, per darti un sostegno ottimale anche durante lunghe sessioni di gioco.', 'categoria'=>'Sedie'],
        ['titolo'=>'Tastiera', 'descrizione'=>'Tastiera meccanica da gaming con Razer Chroma™ RGB ', 'categoria'=>'Periferiche']
    ];
    return view('articoli', ['articoli'=>$articoli]);
})->name('articoli');
Route::get('/chi-sono', function () {
    return view('contatti');
})->name('contatti');

Route::get('/articolo/{id}', function ($id) {
    $articoli = [
        ['titolo'=>'Computer', 'descrizione'=>'Potenti PC per gaming da PCSpecialist', 'categoria'=>'Elettronica'],
        ['titolo'=>'Cuffie gaming', 'descrizione'=>'Assicurati il comfort ininterrotto che ti serve per giocare a lungo a livello competitivo, con le Razer BlackShark V2 HyperSpeed: le cuffie wireless ultra leggere per esport.', 'categoria'=>'Audio'],
        ['titolo'=>'SEDIE DA GAMING', 'descrizione'=>'La Iskur V2 è unica sedia da gaming al mondo progettata in modo ergonomico, con un sistema di supporto lombare adattivo e regolabile. Questo permette alla sedia di modellarsi e adattarsi alla forma di ogni gamer, per darti un sostegno ottimale anche durante lunghe sessioni di gioco.', 'categoria'=>'Sedie'],
        ['titolo'=>'Tastiera', 'descrizione'=>'Tastiera meccanica da gaming con Razer Chroma™ RGB ', 'categoria'=>'Periferiche']
    ];
    return view('articolo', ['articolo'=>$articoli[$id]]);
})->name('articolo');