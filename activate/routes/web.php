<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        "nombre"=>"Gitanazo",
        "autor"=>"Jose Claveria"
    ]);
});

Route::get('/activities', [ActivityController::class, "index"])
    ->name("activities.index")
;

Route::get('/activities/{id}', [ActivityController::class, "show"])
    ->name("activities.show")
;

Route::get('/activities/categoria/{category}', [ActivityController::class, "categoria"])
    ->name("activities.category")
;

Route::get('/about/{nombre}', function (?string $nombre = "nombre") {
    return view('about',[
        "nombre"=> $nombre,
        "autor"=>"Jose Claveria"
    ]);
});

Route::get('/hola', function () {
    return "Hola jose!!";
});

Route::get('/adios', function () {
    return "Adios jose";
});

Route::get('/ibai', function () {
    return "Piazo Payo Poni el Ibai";
});