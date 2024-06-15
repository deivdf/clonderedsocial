<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request){
        
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(!auth()->attempt($request->only('email', 'password'), $request ->remember)){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        $username = auth()->user()->username;
        return redirect()->route('dash.index', ['User' => $username]);
    
    }
}
