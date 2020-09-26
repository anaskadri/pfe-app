<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Preinscription;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

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
        //récupérer d'utilisateur préinscri
        $utilisateur_preinscri = Preinscription::findOrFail($id);
        //envoi de mail
        $email = $utilisateur_preinscri->email;
        $password = mt_rand();
        Mail::to("$email")->send(new OrderShipped());

        //création d'un compte utilisateur
        $user = User::create([
            'preinscription_id' => $id,
            'prenom' => $utilisateur_preinscri->prenom,
            'nom' => $utilisateur_preinscri->nom,
            'profil' => 'etudiant',
            'etat_inscription' => true,
            'email' => $utilisateur_preinscri->email,
            'password' => Hash::make($password)
            ]);
        return redirect()->route('liste_preinscription');
    }



}
