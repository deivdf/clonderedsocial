@extends('layouts.app')

@section('Titulo')
   Tu cuenta
@endsection

@section('contenido')
  <div class="flex justify-center bg-white">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
      <img src="{{asset('img/users.svg')}}" alt="Profile Picture"/>
    </div>
    <div class="w-full md:w-8/12 lg:w-6/12 p-5">   
      <label class="text-2xl font-bold mb-2">Nombre de usuario: </label>
      <p class="text-lg">{{auth()->user()->username}}</p>
    </div>
  </div>
@endsection
