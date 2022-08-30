<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('characters', [ApiController::class, 'futuramaCharactersAPI'])->name('futuramaCharactersAPI');
Route::get('character/{id}', [ApiController::class, 'futuramaSingleCharacterAPI'])->name('futuramaSingleCharacterAPI');
