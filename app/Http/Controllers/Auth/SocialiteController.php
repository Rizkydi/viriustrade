<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialAccount;
use Exception;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProvideCallback($provider)
    {
        try {

            $user = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            return redirect()->back();
        }
        // find or create user and send params user get from socialite and provider
        $authUser = $this->findOrCreateUser($user, $provider);

        // login user
        Auth()->login($authUser, true);

        // setelah login redirect ke dashboard
        return redirect()->route('homepages');
    }

    public function findOrCreateUser($socialiteUser, $provider)
    {

        // $socialAccount = User::where('provider_id', $socialUser->getId())
        //     ->where('provider_name', $provider)
        //     ->first();

        // // Jika sudah ada
        // if ($socialAccount) {
        //     // return user
        //     return $socialAccount->user;

        //     // Jika belum ada
        // } else {

            // User berdasarkan email 
            $user = User::where('email', $socialiteUser->getEmail())->first();

            // Jika Tidak ada user
            if (!$user) {
                // Create user baru
                $user = User::create([
                    'name'  => $socialiteUser->getName(),
                    'email' => $socialiteUser->getEmail(),
                    'provider_id'   => $socialiteUser->getId(),
                    'provider_name' => $provider,
                    'avatar' => $socialiteUser->avatar
                ]);
            }

            // // Buat Social Account baru
            // $user->s()->create([
                
            // ]);

            // return user
            return $user;
        }
    }
