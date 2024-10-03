<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Personne;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'psedo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'ville' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string',],
            'dateNaissance' => ['required', 'date',],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'psedo'=>$request->psedo,
        ]);

        $personne = Personne::create([
            'name' => $request->name,
            'ville' => $request->ville,
            'dateNaissance' => $request->dateNaissance,
            'genre' => $request->genre,
            'userId' => $user->id
            
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Après la création de l'utilisateur (role user)
        $user->roles()->attach(2);

        return redirect(route('dashboard', absolute: false));
    }
}
