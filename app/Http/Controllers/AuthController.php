<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(),401);
        }

        $user = User::create([
            'name' =>request('name'),
            'email' =>request('email'),
            'password' => Hash::make(request('password')),
            'role' => 'user'
        ]);
        return  redirect()->route('login');
    }

    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
            return redirect()->route('dashboard');
        else
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
                'password' => 'The provided credentials do not match our records.',
            ]);
    }
    public function logout(){
        Auth::logout();
    }

}
