<?php

namespace App\Http\Controllers;

class EtudiantsInscritsController extends Controller
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
    {
        return view('EtudiantInscrit/EtudiantsInscrits');
    }
}
