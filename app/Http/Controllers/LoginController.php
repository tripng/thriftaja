<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->with('toast_error','Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function resetPassword(){
        return view('landingpage.resetpassword');
    }

    public function confirmResetPassword(Request $request){
        $user = User::where('id','=',auth()->user()->id);
        $validate = $request->validate([
            'password' => 'required', 
            'new_password' => 'required|min:5|max:20|',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (Hash::check($validate['password'], auth()->user()->password)) {
            $user->update(['password' => Hash::make($request->new_password)]);
            return redirect()->route('profile')->with('info','Password Berhasil Diubah');
        }
    }

    public function forgotPassword(){
        return view('landingpage.forgotPassword');
    }

    public function resetPassWithEmail(Request $request){
        $user = User::whereEmail($request->email)->first();
    }
}