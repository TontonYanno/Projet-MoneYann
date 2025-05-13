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
            'email' => 'test1@gmail.com',
            'telephone' => '1237890',
            'adresse' => '123 Main St',
            'date_naissance' => '1990-01-01',
            'ville_naissance' => 'Paris',
            'photo' => 'public\assets\img\avatars\1.png',
            'password' => 'azertyui', // Plain text password
            // 'password' => Hash::make('password'), // Hash the password
        ]);

        // Save the user to the database
        $user->save();

        // Redirect or return a response
        return 'le compte a été créé avec succès';
    }
}
