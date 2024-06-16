@extends('layouts.app')

@section('Titulo')
   Perfil: {{$user->username}}
@endsection

@section('contenido')
  <div class="flex justify-center bg-white p-8">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
      <div class="md:w-8/12 lg:w-6/12">
        <img src="{{asset('img/users.svg')}}" alt="Profile Picture"/>
      </div>
      <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start
      py-10 md:py-10">
        <label  class="uppercase font-bold text-1xl">Nombre de Usuario</label>
        
        <p class="text-lg">{{$user->username}}</p>
        <p class=" text-gray-800 text-sm mb-3 font-bold">
            0
            <span>segidores</span>
        </p>
        <p class=" text-gray-800 text-sm mb-3 font-bold">
          0
          <span>segidos</span>
        </p>
            <p class=" text-gray-800 text-sm mb-3 font-bold">
            0
            <span>publicaciones</span>
        </p>
      </div>
    </div>
  </div>
@endsection
