<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\membre;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }


    public function create(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $member = membre::where('email',$credentials['email'])->first();
        if($member){
        $type=$member->typeuser;
       if($type === "admin"){
        return redirect()->route('admin.dashboard');
       }else{
        return redirect()->route('user.dashboard');
       }
    }else{
        return redirect()->back()->withErrors(['loginError' => 'Something went wrong with the login. Please try again.']);
      }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);
 

         membre::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'], 
        ]);

        return redirect()->route('authentification');

    }

}
