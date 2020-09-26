<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absences;


class absencesProfController extends Controller
{
    public function index()
    {
        
        $absences = absences::with('user', 'horaire', 'module')->get();
        //$absences = absences::all();

        //dd($absences);
        return view('viewProf/absencesProf', ['absences' => $absences]);
    }
}
