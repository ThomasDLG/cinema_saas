<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FetchDataController extends Controller
{
    public function index(Request $request)
    {
        $input1 = $request->input('input1');
        $input2 = $request->input('input2');

        // Exécutez votre requête de base de données ici en utilisant les valeurs d'entrée

        // return response()->json($data);
    }
}
