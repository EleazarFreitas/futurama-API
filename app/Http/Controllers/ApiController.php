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
       $singleCharacter = (array) $characters->characters();
       if ($id > count($singleCharacter))
          return redirect("https://eleazarfreitas.github.io/futurama-API/");
       return response()->json($singleCharacter[$id - 1]);
    }
}
