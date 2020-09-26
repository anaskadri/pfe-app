<?php

namespace App\Http\Controllers;

use App\horaires;
use App\modules;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class configurationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $modules = modules::all();
        $horaires = horaires::all();
        $users = User::all()->where('profil','=',"prof");
        return view('configurationApp/configuration', ['modules' => $modules, 'horaires' => $horaires,'users' => $users]);
    }

    public function store_modules(Request $request)
    {
        $libelle_module = $request->module;
        $module = modules::create(['libelle_module' => $libelle_module]);
        $module->save();
        return redirect()->route('configuration');
    }

    public function store_horaires(Request $request)
    {
        $heure_debut = $request->heure_debut;
        $heure_fin = $request->heure_fin;

        $horaire = horaires::create(['heure_debut' => $heure_debut, 'heure_fin' => $heure_fin]);
        $horaire->save();
        return redirect()->route('configuration');
    }

    public function store_prof(Request $request)
    {
        $nom = $request->nom_prof;
        $prenom = $request->prenom_prof;
        $email = $request->email_prof;
        $etat_inscription = false;
        $password = "dawm1234";

        $user = User::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'profil' => 'prof',
            'etat_inscription' => $etat_inscription,
            'password' => Hash::make($password),
        ]);
        $user->save();
        return redirect()->route('configuration');
    }


    public function delete($id)
    {
        modules::destroy($id);
        return redirect()->route('configuration');
    }
    public function delete_horaires($id)
    {
        horaires::destroy($id);
        return redirect()->route('configuration');
    }
    public function delete_user($id)
    {
        User::destroy($id);
        return redirect()->route('configuration');
    }
}
