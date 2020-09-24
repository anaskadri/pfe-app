<?php

namespace App\Http\Controllers;

use App\Preinscription;
use App\User;

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
        $users = User::with('preinscription')->get();
//        dd($users);
        return view('EtudiantInscrit/EtudiantsInscrits', ['users' => $users]);
    }
    public function delete_user($id)
    {
        User::destroy($id);
        return redirect()->route('etudiantsInscrits');
    }
}
