<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        //validate user data
        $formData= request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $formData['password'] = bcrypt($formData['password']);

        $user = User::create($formData);

        //let user log in
        auth()->login($user);

        return redirect('/')->with('success', 'Welcome dear <b>' . $user->name . '</b>');
    }

    public function login(){
        return view('auth.login');
    }

    public function postLogin()
    {
        $formData = request()->validate([
            'email' => ['required', 'string', 'email', 'max:255',Rule::exists('users', 'email')],
            'password' => ['required','min:8', 'max:255'],
        ],[
            'email.required' => 'Please enter your email',
            'password.min' => 'Password must be at least 8 characters.',
        ]);

        if (auth()->attempt($formData)) {
            return redirect('/')->with('success','Welcome back <b>' . auth()->user()->name . '</b>');
        }else{
            return back()->with('error','Oops! Something went wrong. Please try again.');
        }

    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'You have been logged out');
    }
}
