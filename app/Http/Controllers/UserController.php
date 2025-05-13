<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // --------------------------------------------------------------------
    // Functions pour les authentifications
    function creer(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string',
            'telephone' => 'required|string|max:15',
            'adresse' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'ville_naissance' => 'required|string|max:255',
            'photo' => 'public\assets\img\avatars\1.png',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // Create a new user instance
        $user = new User($validatedData);

        // Hash the password
        $user->password = bcrypt($validatedData['password']);

        // Save the user to the database
        $user->save();
        // Redirect or return a response
        return redirect()->route('profile')->with('success', 'User registered successfully.');
    }

    function connexion(){
        return view('connexion');
    }

    function authentification(Request $request):RedirectResponse{

        // Validate the request data
        $validatedData = $request->validate([
            'email' => ['required','email'],
            'password' => ['required','string'],
        ]);
        // Attempt to authenticate the user
        if (Auth::attempt($validatedData)) {
            if (Auth::user()->role=='client'){
                return redirect()->intended('clientdashboard')->with('success', 'Connecter avec succès.');
            }else if (Auth::user()->role=='agent'){
                return redirect()->intended('agentdashboard')->with('success', 'Connecter avec succès.');
            }else {
                return redirect()->intended('directeurdashboard' )->with('success', 'Connecter avec succès.');
            }
        } else {
            // Authentication failed, redirect back with an error message
            return back()->withErrors(['email' => 'The provided credentials do not match our records.',])->onlyInput('email');
        }
    }
}
