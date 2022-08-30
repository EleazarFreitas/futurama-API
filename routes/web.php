<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/futurama/characters', [ApiController::class, 'futuramaCharactersAPI'])->name('futuramaCharactersAPI');
Route::get('api/futurama/character/{id}', [ApiController::class, 'futuramaSingleCharacterAPI'])->name('futuramaSingleCharacterAPI');