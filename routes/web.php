<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/reservas');
});


use App\Http\Controllers\ReservaController;

Route::resource('reservas', ReservaController::class);