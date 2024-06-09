<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    //
    public function index() {
        return view('auth.registro');
    }

    public function store(Request $request){
       // dd($request -> get('nombre'));
        //validacion en laravel
        $request -> validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
            'password_confirmation' => 'required|same:password'
        ]);
    }
}
