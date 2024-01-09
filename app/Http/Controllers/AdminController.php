<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
        // Logique pour le tableau de bord de l'administrateur
        return view('admin');
    }
}
