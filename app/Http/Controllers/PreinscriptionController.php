<?php

namespace App\Http\Controllers;

use App\Preinscription;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class PreinscriptionController extends Controller
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
        $preinscriptions = Preinscription::all();

        return view('preinscription/liste_preinscription',['presincriptions' => $preinscriptions]);
    }

    public function creation_compte($id)
    {
        //récupérer
        $utilisateur_preinscri = Preinscription::findOrFail($id);
        //création d'un compte utilisateur
        $user = User::create([
            'preinscription_id' => $id,
            'prenom' => $utilisateur_preinscri->prenom,
            'nom' => $utilisateur_preinscri->nom,
            'profil' => 'etudiant',
            'etat_inscription' => true,
            'email' => $utilisateur_preinscri->email,
            'password' => Hash::make(mt_rand())
            ]);
        return redirect()->route('liste_preinscription');
    }


}
