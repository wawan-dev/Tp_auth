<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class DashboardController extends Controller
{
    public function index()
    {
        $personne = Personne::where('userId', FacadesAuth::user()->id)->first();
        return view('dashboard', ['personne' => $personne]);
        }
}
