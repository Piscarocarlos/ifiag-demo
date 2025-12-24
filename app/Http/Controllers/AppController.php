<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function accueil()
    {
        $name = "Toto";
        $jour = 6;
        $names = ["Titi", "Carlos", "Hakimi", "Tutuiug"];
        return view("pages.home", compact("name", 'jour', "names"));
    }

    public function about()
    {
        return view('pages.about');
    }
}
