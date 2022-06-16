<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20|',
        ]);
    }
}