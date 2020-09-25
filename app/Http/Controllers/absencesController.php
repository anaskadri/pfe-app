<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\absences;
use App\User;

class absencesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    
    public function index()
    {   $absences = absences::with('user', 'horaire', 'module')->get();
        //$absences = absences::all();

        //dd($absences);
        return view('absences/absences', ['absences' => $absences]);
    }

    public function delete_absence($id)
    {
        absences::destroy($id);
        return redirect()->route('absences');
    }
}
