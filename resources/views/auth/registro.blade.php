@extends('layouts.app')


@section('Titulo')
    Registrate en RedSocial
@endsection
ads

@section('contenido')
    <div class="md:flex md:justify-center p-5">
        <div class="md:w-4/12 place-content-center">
            <img src="{{ asset('img/images1.png') }}" alt="imagen">
        </div>
        <div class="md:w-4/12 bg-white p-5 shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold text-center"> Registrate </h2>
            <form class="mt-5" action="{{route('registro')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-bold text-gray-600"> Nombre </label>
                    <input 
                    type="text" 
                    name="nombre" 
                    id="nombre" 
                    class="form-input mt-1 block w-full rounded border-gray-300 p-2 border @error('nombre') border-red-500 @enderror" 
                    placeholder="Tu nombre"
                    value="{{old('nombre')}}"
                    >
                    
                </div>
                @error('nombre')
                    <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold text-gray-600"> Email </label>
                    <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-input mt-1 block w-full rounded border-gray-300 p-2 border @error('email') border-red-500 @enderror" 
                    placeholder="Tu email"
                    value="{{old('email')}}"
                    >

                </div>
                @error('email')
                    <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold text-gray-600"> Contraseña </label>
                    <input
                    type="password"
                    name="password"
                    id="password" 
                    class="form-input mt-1 block w-full rounded border-gray-300 p-2 border @error('password') border-red-500 @enderror"
                    placeholder="Tu contraseña"
                    value="{{old('password')}}"
                    >
                </div>
                @error('password')
                    <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-bold text-gray-600"> Confirmar Contraseña </label>
                    <input 
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation" 
                    class="form-input mt-1 block w-full rounded border-gray-300 p-2 border @error('password_confirmation') border-red-500 @enderror" 
                    placeholder="Confirma tu contraseña"
                    value="{{old('password_confirmation')}}"
                    >
                    
                </div>
                @error('password_confirmation')
                    <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p> {{ $message }} </p>
                    </div>
                @enderror
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Registrarse </button>
                </div>
            </form>
        </div>
    </div>
@endsection