<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modules;
use App\User;
use App\horaires;

class absencesFormProfController extends Controller
{
    public function index()
    {
        
        $modules = modules::all();
        $horaires = horaires::all();
        $users = User::all();
        
        
        return view('viewProf/absencesFormProf', ['horaires' => $horaires, 'modules' => $modules, 'users' => $users]);
        
    }
}
