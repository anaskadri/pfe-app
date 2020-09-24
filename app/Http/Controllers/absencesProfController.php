<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class absencesProfController extends Controller
{
    public function index()
    {
        return view('viewProf/absencesProf');
    }
}
