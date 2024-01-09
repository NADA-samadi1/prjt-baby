<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    // ...

    protected function create(Request $request)
    {
        // Validation des données du formulaire
        $this->validator($request->all())->validate();

        // Création de l'utilisateur
        $user = $this->createUser($request->all());

        // Connexion de l'utilisateur après l'enregistrement
        $this->guard()->login($user);

        // Redirection après l'enregistrement
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    // ...

    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
