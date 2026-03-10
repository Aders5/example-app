<?php
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola-mundo', function() {
    return view('hola');
});

Route::get('/contactos/create', [ContactoController::class, 'create'])->name('contactos.create');
Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');
Route::get('/contactos/{contacto}', [ContactoController::class, 'show']);
Route::get('/contactos', [ContactoController::class, 'index'])->name('contactos.index');

