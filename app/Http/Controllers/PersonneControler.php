<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneControler extends Controller
{
    public function index(Personne $personne){
        return view('personne',['personne'=>$personne]);
    }

    public function allpersonne(){
        $personne = Personne::all();
        return view('allpersonne',['personne'=>$personne]);
    }
}
