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
    function creerutilisateur(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:client,agent,directeur'],
            'email' => ['required', 'email', 'unique:users,email'],
            'telephone' => ['required', 'string', 'max:15'],
            'adresse' => ['required', 'string', 'max:255'],
            'date_naissance' => ['required', 'date'],
            'ville_naissance' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif|max:2048'],
            // Password validation
            // 'password' => ['required', 'string', 'min:8'], // Minimum 8 characters
        ]);
        // Create a new user instance
        $user = new User();
        $user->nom = $validatedData['nom'];
        $user->prenom = $validatedData['prenom'];
        $user->role = $validatedData['role'];
        $user->email = $validatedData['email'];
        $user->telephone = $validatedData['telephone'];
        $user->adresse = $validatedData['adresse'];
        $user->date_naissance = $validatedData['date_naissance'];
        $user->ville_naissance = $validatedData['ville_naissance'];
        $user->photo ='assets/img/avatars/1.png' ; // Store the photo if provided
        $passxord="azertyui";
        $user->password = Hash::make($passxord); // Hash the password
        // Save the user to the database
        $user->save();

        // Optionally, you can use the create method directly

        // Redirect or return a response
        return redirect()->route('compteutilisateur')->with('success', 'Utilisateur créé avec succès.');
    }

    function listeutilisateur(){
        $users = User::all();
        return view('directeur.listeutilisateur', compact('users'));
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

    function deconnexion(Request $request):RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Déconnecté avec succès.');
    }
    // Profiles drecteur

    function directeurdashboard (){
        return view('directeur.dashboard');
    }
    function comptedirecteur() {
        return view('directeur.compte');
    }

    function compteutilisateur(){
        return view('directeur.compteutilisateur');
    }

    function depotdirecteur(){
        return view('directeur.depotdirecteur');
    }
    function retraitdirecteur(){
        return view('directeur.retraitdirecteur');
    }
    function transfertdirecteur(){
        return view('directeur.transfertdirecteur');
    }
    function profiledirecteur(){
        return view('directeur.profiledirecteur');
    }
}
