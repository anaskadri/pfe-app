<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class absencesViewEtudiantController extends Controller
{
    public function index()
    {
        return view('viewEtudiant/absencesViewEtudiant');
    }
}
