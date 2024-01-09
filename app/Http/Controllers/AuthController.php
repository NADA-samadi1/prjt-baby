<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\membre;

class AuthController extends Controller
{
    public function ajouter()
    {
        return view('Ajouter');
    }

    public function create(Request $request)
{
    $credentials = $request->only('email', 'password');
    $user = membre::where('email', $credentials['email'])->first();

    if (!$user) {
        return redirect()->back()->withErrors(['loginError' => 'Invalid email address.']);
    }

    $type = $user->typeuser;

    if (Auth::attempt($credentials)) {
        if ($type === 'admin') {
            return redirect('/admin/dashboard');
        } elseif ($type === 'user') {
            return redirect('/user/dashboard');
        } else {
            return redirect()->back()->withErrors(['loginError' => 'Invalid user type.']);
        }
    } else {
        return redirect()->back()->withErrors(['loginError' => 'Invalid password.']);
    }
}

}
