<?php

namespace App\Http\Controllers;

use App\Models\membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view("user/dashbord");
    }

}
