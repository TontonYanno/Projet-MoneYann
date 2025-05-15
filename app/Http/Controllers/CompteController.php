<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class CompteController extends Controller
{



    function test(Request $request){
        // Create a new user instance
        $user = User::create([
            'nom' => 'OUSSOU',
            'prenom' => 'Yann',
            'role' => 'directeur',
            'email' => 'test1@gmail.com',
            'telephone' => '1237890',
            'adresse' => 'Faya',
            'date_naissance' => '1990-01-01',
            'ville_naissance' => 'Bouake',
            'photo' => 'public\assets\img\avatars\1.png',
            'password' => 'azertyui', // Plain text password
            // ,la leçon que j'ai appris c'est que je ne dois pas hacher dans la création en dur avec Laravel 12
        ]);

        // Save the user to the database
        $user->save();

        // Redirect or return a response
        return 'le compte a été créé avec succès';
    }
}
