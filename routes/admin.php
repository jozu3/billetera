<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\JugadoreController;
use App\Http\Controllers\Admin\RecargaController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class)->names('admin');
Route::resource('/jugadores', JugadoreController::class)->names('admin.jugadores');
Route::resource('/recargas', RecargaController::class)->names('admin.recargas');
// Route::resource('/medios', MedioController::class)->names('admin.medios');