<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function index() { 
        $resultat=0;
        return view("multiplication")->with('resultat',$resultat);
    }
    public function multiplication(Request $request) { 
        $resultat=$request->a * $request->b;
        return view("multiplication")->with('resultat',$resultat);
    }

}
