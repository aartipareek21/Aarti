<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;  // Importing Hash
use Illuminate\Support\Facades\Auth;  // Importing Auth
use App\Models\User;  // Importing User model
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Send confirmation email
        Mail::to($user->email)->send(new WelcomeMail($user));

        return response()->json(['message' => 'Registration successful!']);
    }

    // Login User
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Show Profile
    public function showProfile()
    {
        return view('profile');
    }
    public function home()
{
    return view('home');  // return the home view or any other content
}

public function showLoginForm()
{
    return view('auth.login'); // Ensure this is correct
}

public function showRegisterForm()
{
    return view('auth.register'); // Make sure the view exists in the 'auth' folder
}
    // Update Profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        // Send confirmation email after profile update
        Mail::to($user->email)->send(new WelcomeMail($user));

        return back()->with('status', 'Profile updated successfully!');
    }
}
