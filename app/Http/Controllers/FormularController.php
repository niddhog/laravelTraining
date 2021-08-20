<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularController extends Controller
{
    public function formularAuswerten(Request $request) {

        $eingabe = $request->input;

        return view("ausgabe", compact("eingabe")); //compat passes the variable $eingabe to the view "ausgabe"

    }
}
