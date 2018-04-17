<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuiviController extends Controller
{
    public function echeancier()
    {
        return view('suivi.gestion_echeancier');
    }
}
