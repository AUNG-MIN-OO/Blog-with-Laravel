<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(){
        return view('auth.create');
    }

    public function store(){
        //validate user data
        $formData= request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create($formData);

        session()->flash('registerSuccess', 'Welcome dear <b>' . $formData['name'] . '</b>');

        return redirect('/');
    }
}
