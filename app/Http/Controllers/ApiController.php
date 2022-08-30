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
       $characters = new CharactersController();
       $singleCharacter = (array) $characters->characters()[$id - 1];
       return response()->json($singleCharacter);
    }
    public function futuramaCharacterImageAPI ($id)
    {
      return view ('futuramaCharacterImage.futuramaCharacterImage');
    }
}
