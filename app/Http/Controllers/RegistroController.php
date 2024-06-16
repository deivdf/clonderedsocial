<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    //
    public function index() {
        return view('auth.registro');
    }

    public function store(Request $request){
       // dd($request -> get('nombre'));
        //validacion en laravel
        $request->request->add(['username' => Str::slug($request -> username)]);


        $request -> validate([
            'nombre' => 'required',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request -> nombre,
            'username' => $request -> username,
            'email' => $request -> email,
            'password' => Hash::make ($request -> password),
        ]);
        // auth()->attempt([
        //     'email' => $request -> email,
        //     'password' => $request -> password,
        // ]);
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dash.index'); 

    }
}
