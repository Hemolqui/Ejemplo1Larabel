<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController; // esto hace referencia a la clase controlador
Route::get('/', function () 
{
    return view('welcome');
});
// en esta parte indica que navegara solo el usuario que esta logueado
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // primera ruta para persona 
    Route::resource('persona', PersonaController::class)->names('persona');
    

});
