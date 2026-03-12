<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\OfertaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola-mundo', function() {
    return view('hola');
});

Route::resource('contactos', ContactoController::class);
Route::resource('ofertas', ContactoController::class);


