<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CharactersController;

class ApiController extends Controller
{
    public function futuramaCharactersAPI ()
    {
       $characters = new CharactersController();
       return [
        "results" => $characters->characters()
       ];
    }
    public function futuramaSingleCharacterAPI ($id)
    {
       $character = new CharactersController();
       return (array) $character->characters()[$id - 1];
    }
}
