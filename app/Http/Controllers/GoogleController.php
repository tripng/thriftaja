<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\AUTH;
use App\Models\User;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();
            $find_user = User::where('google_id',$user->getID())->first();
            if($find_user){
                AUTH::login($find_user);
                return redirect()->route('halaman-utama');
            }else{
                $new_user = User::create([
                    'name' => $user->getName(),
                    'username' => Str::replace('@gmail.com', '', $user->getEmail()),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('12345678'),
                ]);
                AUTH::login($new_user);
                return redirect()->route('halaman-utama');
            }
        }catch(\Throwable $e){
            
        }
    }
}