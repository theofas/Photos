<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function accueil(){
        return view("accueil");
    }
}
