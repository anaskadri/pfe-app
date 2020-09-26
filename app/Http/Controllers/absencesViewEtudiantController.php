<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\absences;

class absencesViewEtudiantController extends Controller
{
    public function index()
    {
        
        
        $absences = absences::with('user')->get();
        //dd($absences);
        //return view('viewEtudiant/absencesViewEtudiant');
        return view('viewEtudiant/absencesViewEtudiant', ['absences' => $absences]);
    }
    
    public function delete_absence_etudiant($id)
    {
        absences::destroy($id);
        return redirect()->route('absencesViewEtudiant');
    }
   
}
