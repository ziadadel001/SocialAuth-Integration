<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Redirect the user to the Google authentication page.
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle callback from Google after authentication.
    public function callback()
    {
        try {
            // Retrieve the user from Google.
            $googleUser = Socialite::driver('google')->user();
            
            // Check if the user already exists in the database.
            $user = User::where('email', $googleUser->getEmail())->first();
            if ($user) {
                // Update the user with Google ID if it doesn't exist.
                if (!$user->google_id) {
                    $user->update(['Google_id' => $googleUser->getId()]);
                }
            }

            // Authenticate the user.
            if (!$user) {
                // Create a new user if not found.
                $newUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'Google_id' => $googleUser->getId(),
                    'password' => bcrypt('secret'),
                ]);

                // Log in the new user.
                Auth::login($newUser);

                // Redirect to the dashboard.
                return redirect()->intended(route('dashboard'));
            } else {
                // Log in the existing user.
                Auth::login($user);

                // Redirect to the dashboard.
                return redirect()->intended('dashboard');
            }
        } catch (\Throwable $th) {
            // Redirect to the login page with an error message in case of any exception.
            return redirect()->route('login')->with('error', 'An error occurred while trying to login with Google.');
        }
    }
}
