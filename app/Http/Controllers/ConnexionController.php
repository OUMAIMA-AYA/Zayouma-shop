<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

    class ConnexionController extends Controller
    {
        public function login(Request $request)
        {
            // Validate the incoming request
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
    
            // Check if the user exists
            $user = User::where('email', $request->email)->first();
    
            // If user exists, check the password
            if ($user && Hash::check($request->password, $user->password)) {
                // Redirect to the home page
                return redirect()->route('home');
            } else {
                // If credentials are invalid, return back with an error
                return back()->withErrors(['email' => 'Invalid credentials']);
            }
        }
        
        public function signup(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5|confirmed',
            ]);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('connexion');
        }
        

}
    
