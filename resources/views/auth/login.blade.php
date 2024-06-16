@extends('layouts.app')


@section('Titulo')
    Inicia tu Sesión
@endsection


@section('contenido')
    <div class="flex justify-center p-5">
        <div class="w-1/3 bg-white p-5  shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold text-center"> Iniciar Sesión </h2>
            <form method="post" action="{{route('login')}}" class="mt-5" novalidate>
                @csrf
                @if (session('mensaje'))
                    <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p> {{ session('mensaje') }} </p>
                    </div>
                @endif
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold text-gray-600"> Email </label>
                    <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-input mt-1 block w-full rounded border-gray-300 p-2 border @error('password') border-red-500 @enderror"
                    placeholder="Tu email">
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
                    placeholder="Tu contraseña">
                </div>
                @error('password')
                <div class="bg-red-200 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                    <p> {{ $message }} </p>
                </div>
                @enderror
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Iniciar Sesión </button>
                </div>
            </form>
        </div>
    </div>
@endsection