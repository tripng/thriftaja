<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20|',
            'no' => 'required|min:12|numeric',
            'alamat' => 'required',
            'kota' => 'required',
            'genre' => 'required',
            'kode_pos' => 'required',
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);

        return redirect()->route('login')->with('toast_success','Registration successfull! Please login');
    }
}