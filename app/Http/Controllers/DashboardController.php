<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $personne = Personne::where('userId', Auth::user()->id)->first();
        return view('dashboard', ['personne' => $personne]);
    }

    public function roles()
    {
        $roles = Auth::User()->roles;
        return view('roles', ['roles' => $roles]);
    }  
}
