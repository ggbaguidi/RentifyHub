<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validation logic
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validation logic
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/dashboard')->with('success', 'Login successful.');
        }

        // If authentication fails
        return redirect('/login')->with('error', 'Invalid email or password.');
    }

    public function showRentalHistory()
    {
        $user = Auth::user();

        // Retrieve rental history for the logged-in user
        $rentals = $user->rentals;

        return view('user.rental_history', compact('rentals'));
    }
}
