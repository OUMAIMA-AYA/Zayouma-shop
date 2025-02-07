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
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',  // Ensure the email is unique
            'password' => 'required|min:6|confirmed',  // 'confirmed' will check for password confirmation
        ]);

        // Create the new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hash the password before saving it
        ]);

        // Redirect to home page or wherever you'd like
        return redirect()->route('connexion');
    }

}
    
