<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function index ()
    {
        return view('auth.register');
    }

    public function store (Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:225',
            'email' => 'required|string|email:dns|unique:users',
            'password' => 'required|string|min:5',
        ]);

        User::create([

            'name' => $request->name, 
            'email' => $request->email, 
            'password' => bcrypt($request->password) 

        ]);

        return to_route('login');
    }

        public function logout(){
            Auth::logout();
            return redirect('/login');
        }
}
