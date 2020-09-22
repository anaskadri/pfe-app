<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    {
        return view('absences/absences');
    }
}
