<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('characters', [ApiController::class, 'futuramaCharactersAPI']);
Route::apiResource('character/{id}', [ApiController::class, 'futuramaSingleCharacterAPI']);