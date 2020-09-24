<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profController extends Controller
{
    public function index()
    {
        return view('viewProf/prof');
    }
}
