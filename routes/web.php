<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluacionAlumnosController;

Route::get('/', function () {
    return view('home');
});

Route::resource('evaluacion_alumnos', EvaluacionAlumnosController::class);