<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function redirectToProvider()
    {

        return Socialite::driver('azureadb2c')->redirect();
    }

    public function handleProviderCallback()
    {

        $user = Socialite::driver('azureadb2c')->user();
        //exit;
        // Find or create a user based on the information received from Microsoft
        return redirect()->to('/');
        exit;
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // Log the user in if they already exist
            Auth::login($existingUser, true);
        } else {
            // Create a new user if they don't exist
            $newUser = User::create([
                'name'  => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(str_random(16)), // Generate a random password
            ]);

            Auth::login($newUser, true);
        }

        return redirect()->to('/home'); // Redirect to the home page or any other page
    }
}
