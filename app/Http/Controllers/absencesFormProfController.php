<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class absencesFormProfController extends Controller
{
    public function index()
    {
        return view('viewProf/absencesFormProf');
    }
}
